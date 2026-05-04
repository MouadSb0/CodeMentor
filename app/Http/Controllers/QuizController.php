<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Quiz;
use App\Models\Result;
use App\Models\UserNotification;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        $recentQuizzes = collect();
        $randomQuizzes = Quiz::inRandomOrder()->take(6)->get();
        $teacherCourses = Course::latest()->get();
        $notifications = collect();

        if (auth()->check()) {
            $notifications = UserNotification::where('user_id', auth()->id())
                ->latest()
                ->take(10)
                ->get();

            $recentQuizzes = Quiz::where('user_id', auth()->id())
                ->latest()
                ->take(3)
                ->get();
        }

        return view('quiz', compact(
            'quizzes',
            'notifications',
            'recentQuizzes',
            'randomQuizzes',
            'teacherCourses'
        ));
    }

    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('single_quiz', compact('quiz'));
    }

    public function storeResult(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        
        $result = Result::create([
            'user_id' => auth()->id(),
            'quiz_id' => $quiz->id,
            'score' => $request->score,
            'total_questions' => $request->total_questions,
            'time_taken' => $request->time_taken,
        ]);

        $student = auth()->user();
        if ($quiz->user_id && $quiz->user_id !== $student->id) {
            UserNotification::create([
                'user_id' => $quiz->user_id,
                'type' => 'quiz_completed',
                'title' => 'Quiz completed by a student',
                'body' => "{$student->name} completed your quiz \"{$quiz->title}\".",
            ]);
        }

        return response()->json([
            'success' => true,
            'result_id' => $result->id
        ]);
    }

    public function showResult($id)
    {
        $result = Result::with('quiz', 'user')->findOrFail($id);
        
        // Leaderboard for this specific quiz
        $leaderboard = Result::with('user')
            ->where('quiz_id', $result->quiz_id)
            ->orderBy('score', 'desc')
            ->orderBy('time_taken', 'asc')
            ->get();

        return view('result', compact('result', 'leaderboard'));
    }
}
