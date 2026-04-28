<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Exercise;
use App\Models\UserNotification;

class ExerciceController extends Controller
{
    public function index()
    {
        $exercices = Exercise::all();
        return view('exercice', compact('exercices'));
    }

    public function show($id)
    {
        $exercice = Exercise::findOrFail($id);
        return view('single_exercice', compact('exercice'));
    }

    public function complete($id)
    {
        $exercise = Exercise::findOrFail($id);
        $user = auth()->user();

        $alreadyCompleted = $exercise->completedByUsers()
            ->where('users.id', $user->id)
            ->exists();

        if (!$alreadyCompleted) {
            $exercise->completedByUsers()->attach($user->id, [
                'completed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($exercise->user_id && $exercise->user_id !== $user->id) {
                UserNotification::create([
                    'user_id' => $exercise->user_id,
                    'type' => 'exercise_completed',
                    'title' => 'Exercise completed by a student',
                    'body' => "{$user->name} completed your exercise \"{$exercise->title}\".",
                ]);
            }
        }

        return redirect()
            ->route('single_exercice', $exercise->id)
            ->with('success', $alreadyCompleted ? 'Exercise already completed.' : 'Exercise marked as completed.');
    }
}
