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
}
