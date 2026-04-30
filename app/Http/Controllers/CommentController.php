<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Disccussion;
use App\Models\UserNotification;

class CommentController extends Controller
{
    public function store(Request $request, $discussionId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $discussion = Disccussion::findOrFail($discussionId);

        $comment = Comment::create([
            'user_id' => auth()->id(),
            'disccussion_id' => $discussion->id,
            'content' => $request->content,
        ]);

        if ($discussion->user_id !== auth()->id()) {
            UserNotification::create([
                'user_id' => $discussion->user_id,
                'type' => 'comment',
                'title' => 'New Comment on your Discussion',
                'body' => auth()->user()->name . ' commented on your discussion: ' . $discussion->title,
                'points' => 0,
            ]);
        }

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function react(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $user = auth()->user();
        $type = $request->input('type', 'like');

        $reaction = \App\Models\CommentReaction::where('comment_id', $comment->id)
            ->where('user_id', $user->id)
            ->first();

        if ($reaction) {
            if ($reaction->type === $type) {
                $reaction->delete();
                $status = 'removed';
            } else {
                $reaction->update(['type' => $type]);
                $status = 'updated';
            }
        } else {
            \App\Models\CommentReaction::create([
                'comment_id' => $comment->id,
                'user_id' => $user->id,
                'type' => $type,
            ]);
            $status = 'added';
        }

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'action' => $status,
                'count' => $comment->reactions()->count(),
            ]);
        }

        return back();
    }
}
