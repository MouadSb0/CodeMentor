<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disccussion;
use App\Models\UserNotification;

class DisccussionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string',
            'attachment' => 'nullable|file|max:51200', // 50MB
        ]);

        $data = [
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
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

        return redirect()->back()->with('success', 'Discussion created successfully.');
    }

    public function share(Request $request, $id)
    {
        $request->validate([
            'destination' => 'required|string|in:profile,group',
            'group_id'    => 'nullable|exists:groups,id',
        ]);

        $original = Disccussion::findOrFail($id);
        $user     = auth()->user();

        if ($request->destination === 'group') {
            // Check if user is member of the target group
            $group = \App\Models\Group::findOrFail($request->group_id);
            if (!$group->members->contains($user->id)) {
                return response()->json(['success' => false, 'message' => 'You are not a member of this group.'], 403);
            }

            // Create a shared discussion in the group
            Disccussion::create([
                'user_id'  => $user->id,
                'group_id' => $group->id,
                'title'    => "[Shared] " . $original->title,
                'content'  => "Shared from " . $original->user->name . ":\n\n" . $original->content,
                'category' => $original->category,
            ]);
        } else {
            // Sharing to profile: Create activity and notification
            \App\Models\Activity::create([
                'user_id' => $user->id,
                'title'   => 'Shared a discussion: ' . $original->title,
                'type'    => 'social',
            ]);
        }

        // Notify the original author
        if ($original->user_id !== $user->id) {
            UserNotification::create([
                'user_id' => $original->user_id,
                'type'    => 'share',
                'title'   => 'Discussion Shared',
                'body'    => $user->name . ' shared your discussion: ' . $original->title,
                'points'  => 5, // Reward for sharing
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Discussion shared successfully!']);
    }
}
