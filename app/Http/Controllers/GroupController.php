<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Disccussion;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    // ── Create a new group ────────────────────────────────────────────────────
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $group = Group::create([
            'name'        => $request->name,
            'description' => $request->description,
            'admin_id'    => Auth::id(),
        ]);

        // Creator automatically becomes a member
        $group->members()->attach(Auth::id());

        return redirect()->route('groups.show', $group->id)
            ->with('group_created', 'Group created successfully! You are now its admin.');
    }

    // ── Show a group page ─────────────────────────────────────────────────────
    public function show($id)
    {
        $group = Group::with(['admin', 'members', 'discussions.user', 'discussions.comments.user'])
            ->findOrFail($id);

        $isAdmin  = Auth::id() === $group->admin_id;
        $isMember = $group->members->contains(Auth::id());

        // All users the member can invite (not already members)
        $nonMembers = $isMember
            ? User::whereNotIn('id', $group->members->pluck('id'))->get(['id', 'name', 'photo'])
            : collect();

        return view('group', compact('group', 'isAdmin', 'isMember', 'nonMembers'));
    }

    // ── Join a group ──────────────────────────────────────────────────────────
    public function join($id)
    {
        $group = Group::findOrFail($id);
        $group->members()->syncWithoutDetaching([Auth::id()]);

        return redirect()->route('groups.show', $id)
            ->with('success', 'You joined the group!');
    }

    // ── Leave a group ─────────────────────────────────────────────────────────
    public function leave($id)
    {
        $group = Group::findOrFail($id);

        if (Auth::id() === $group->admin_id) {
            return redirect()->back()->with('error', 'Admins cannot leave their own group. Transfer ownership first.');
        }

        $group->members()->detach(Auth::id());

        return redirect()->route('community')
            ->with('success', 'You left the group.');
    }

    // ── Invite a member ───────────────────────────────────────────────────
    public function inviteMember(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        
        // Check if the current user is a member
        if (!$group->members->contains(Auth::id())) {
            abort(403, 'Only group members can invite others.');
        }

        $request->validate(['user_id' => 'required|exists:users,id']);

        // Check if already a member
        if ($group->members->contains($request->user_id)) {
            return redirect()->back()->with('error', 'User is already a member.');
        }

        // Check if invitation already exists
        $existing = \App\Models\GroupInvitation::where('group_id', $group->id)
            ->where('user_id', $request->user_id)
            ->where('status', 'pending')
            ->first();

        if ($existing) {
            return redirect()->back()->with('error', 'An invitation is already pending for this user.');
        }

        $invitation = \App\Models\GroupInvitation::create([
            'group_id' => $group->id,
            'user_id' => $request->user_id,
            'invited_by' => Auth::id(),
            'status' => 'pending',
        ]);

        // Create a notification for the invited user
        \App\Models\UserNotification::create([
            'user_id' => $request->user_id,
            'type' => 'group_invite',
            'title' => 'New Group Invitation',
            'body' => Auth::user()->name . ' invited you to join ' . $group->name,
            'points' => 0,
            'data' => [
                'invitation_id' => $invitation->id,
                'group_name' => $group->name,
            ]
        ]);

        return redirect()->route('groups.show', $id)
            ->with('success', 'Invitation sent successfully.');
    }

    public function acceptInvitation($id)
    {
        $invitation = \App\Models\GroupInvitation::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->firstOrFail();

        $invitation->update(['status' => 'accepted']);
        
        $group = Group::findOrFail($invitation->group_id);
        $group->members()->syncWithoutDetaching([Auth::id()]);

        return redirect()->route('groups.show', $group->id)
            ->with('success', 'You have joined the group!');
    }

    public function rejectInvitation($id)
    {
        $invitation = \App\Models\GroupInvitation::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->firstOrFail();

        $invitation->update(['status' => 'rejected']);

        return redirect()->back()->with('success', 'Invitation rejected.');
    }

    // ── Admin: remove a member ────────────────────────────────────────────────
    public function removeMember($id, $userId)
    {
        $group = Group::findOrFail($id);
        $this->authorizeAdmin($group);

        if ((int) $userId === $group->admin_id) {
            return redirect()->back()->with('error', 'Cannot remove the group admin.');
        }

        $group->members()->detach($userId);

        return redirect()->route('groups.show', $id)
            ->with('success', 'Member removed.');
    }

    // ── Admin: remove a discussion ────────────────────────────────────────────
    public function removeDiscussion($id, $discussionId)
    {
        $group = Group::findOrFail($id);
        $this->authorizeAdmin($group);

        Disccussion::where('id', $discussionId)
            ->where('group_id', $id)
            ->firstOrFail()
            ->delete();

        return redirect()->route('groups.show', $id)
            ->with('success', 'Discussion removed.');
    }

    // ── Admin: remove a comment ───────────────────────────────────────────────
    public function removeComment($id, $commentId)
    {
        $group = Group::findOrFail($id);
        $this->authorizeAdmin($group);

        // Verify the comment belongs to a discussion in this group
        $comment = Comment::whereHas('disccussion', fn($q) => $q->where('group_id', $id))
            ->findOrFail($commentId);

        $comment->delete();

        return redirect()->route('groups.show', $id)
            ->with('success', 'Comment removed.');
    }

    // ── Post a discussion inside a group ──────────────────────────────────────
    public function storeDiscussion(Request $request, $id)
    {
        $group = Group::findOrFail($id);

        // Only members (or admin) can post
        if (!$group->members->contains(Auth::id())) {
            return redirect()->back()->with('error', 'Join the group first.');
        }

        $request->validate([
            'title'      => 'required|string|max:255',
            'content'    => 'required|string',
            'attachment' => 'nullable|file|max:51200', // 50MB
        ]);

        $data = [
            'user_id'  => Auth::id(),
            'group_id' => $id,
            'title'    => $request->title,
            'content'  => $request->content,
            'category' => $request->category ?? 'Technical',
        ];

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = $file->store('discussions/attachments', 'public');
            $data['attachment_url'] = asset('storage/' . $path);
            $data['attachment_name'] = $file->getClientOriginalName();
            
            $mime = $file->getMimeType();
            if (str_contains($mime, 'image')) $data['attachment_type'] = 'image';
            elseif (str_contains($mime, 'video')) $data['attachment_type'] = 'video';
            elseif (str_contains($mime, 'pdf')) $data['attachment_type'] = 'pdf';
            else $data['attachment_type'] = 'file';
        }

        Disccussion::create($data);

        return redirect()->route('groups.show', $id)
            ->with('success', 'Discussion posted!');
    }

    // ── Update group cover photo ──────────────────────────────────────────────
    public function updateCover(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $this->authorizeAdmin($group);

        $request->validate([
            'cover_photo' => 'required|image|max:10240', // 10MB
        ]);

        if ($request->hasFile('cover_photo')) {
            $path = $request->file('cover_photo')->store('group-covers', 'public');
            $group->update(['cover_photo' => $path]);
        }

        return back()->with('success', 'Cover photo updated!');
    }

    // ── Helper ────────────────────────────────────────────────────────────────
    private function authorizeAdmin(Group $group)
    {
        if (Auth::id() !== $group->admin_id) {
            abort(403, 'Only the group admin can perform this action.');
        }
    }
}
