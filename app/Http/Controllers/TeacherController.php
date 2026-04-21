<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Exercise;
use App\Models\Quiz;

class TeacherController extends Controller
{
    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
        }

        Course::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('teacher.courses')->with('success', 'Course created successfully!');
    }

    public function dashboard()
    {
        $showBonusModal = false;
        $bonusAmount = 0;

        $user = auth()->user();
        if (!$user->last_bonus_at || !$user->last_bonus_at->isToday()) {
            $showBonusModal = true;
            $bonusAmount = rand(10, 500);
            session(['daily_bonus' => $bonusAmount]);
        }

        return view('teacher.dashboard', compact('showBonusModal', 'bonusAmount'));
    }
    public function courses(Request $request)
    {
        $query = Course::query()->latest();

        if ($request->get('filter') === 'my_courses') {
            $query->where('user_id', auth()->id());
        }

        $courses = $query->paginate(6)->withQueryString();

        return view('teacher.courses', compact('courses'));
    }

    public function exercices(Request $request)
    {
        $exercises = Exercise::latest()->paginate(9);
        return view('teacher.exercices', compact('exercises'));
    }

    public function storeExercise(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'difficulty' => 'required|string',
            'estimated_time' => 'required|integer|min:1',
            'tech_stack' => 'required|array',
            'description' => 'required|string',
        ]);

        $exercise = new Exercise($validated);
        $exercise->user_id = auth()->id();
        
        if ($request->has('files_json')) {
            $exercise->files = json_decode($request->files_json, true);
        }
        
        $exercise->save();

        return redirect()->back()->with('success', 'Exercise published successfully!');
    }

    public function codeLab()
    {
        return view('teacher.codeLab');
    }

    public function quizzes()
    {
        $recentQuizzes = Quiz::where('user_id', auth()->id())->latest()->take(3)->get();
        $randomQuizzes = Quiz::inRandomOrder()->take(6)->get();

        return view('teacher.quiz', compact('recentQuizzes', 'randomQuizzes'));
    }

    public function careers()
    {
        return view('teacher.careers');
    }
    public function storeQuiz(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'course_name' => 'required|string',
            'time_limit' => 'required|integer|min:1',
            'passing_score' => 'required|integer|min:0|max:100',
            'questions' => 'required|array|min:3',
        ]);

        $quiz = new Quiz($validated);
        $quiz->user_id = auth()->id();
        $quiz->save();

        return response()->json([
            'success' => true,
            'message' => 'Quiz created successfully!'
        ]);
    }
}
