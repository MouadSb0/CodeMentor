<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Course;
use App\Models\Exercise;
use App\Models\Module;
use App\Models\Quiz;
use App\Models\UserNotification;

class TeacherController extends Controller
{
    public function storeCourse(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'modules' => 'required|array|min:1',
            'modules.*.title' => 'required|string|max:255',
            'modules.*.description' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
        }

        DB::transaction(function () use ($validated, $imagePath) {
            $course = Course::create([
                'title' => $validated['title'],
                'category' => $validated['category'],
                'description' => $validated['description'],
                'image' => $imagePath,
                'user_id' => auth()->id(),
                'modules_count' => count($validated['modules']),
            ]);

            $modules = collect($validated['modules'])
                ->map(function (array $module) use ($course) {
                    return [
                        'course_id' => $course->id,
                        'title' => $module['title'],
                        'description' => $module['description'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                })
                ->toArray();

            Module::insert($modules);
        });

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

        $notifications = UserNotification::where('user_id', $user->id)->latest()->take(10)->get();
        $unreadNotificationsCount = UserNotification::where('user_id', $user->id)
            ->whereNull('read_at')
            ->count();

        return view('teacher.dashboard', compact(
            'showBonusModal',
            'bonusAmount',
            'notifications',
            'unreadNotificationsCount'
        ));
    }
    public function courses(Request $request)
    {
        $query = Course::query()->latest()->withCount('modules');

        if ($request->get('filter') === 'my_courses') {
            $query->where('user_id', auth()->id());
        }

        $courses = $query->paginate(6)->withQueryString();

        return view('teacher.courses', compact('courses'));
    }

    public function showCourse($id)
    {
        $course = Course::with(['user', 'modules', 'exercises', 'quizzes'])
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $teacherExercises = Exercise::where('user_id', auth()->id())
            ->latest()
            ->get(['id', 'title']);

        $teacherQuizzes = Quiz::where('user_id', auth()->id())
            ->latest()
            ->get(['id', 'title']);

        $relatedCourses = Course::where('category', $course->category)
            ->where('id', '!=', $course->id)
            ->take(3)
            ->get();

        return view('single_course', compact('course', 'relatedCourses', 'teacherExercises', 'teacherQuizzes'));
    }

    public function attachReferences(Request $request, $id)
    {
        $course = Course::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $validated = $request->validate([
            'exercise_id' => 'nullable|integer|exists:exercises,id',
            'quiz_id' => 'nullable|integer|exists:quizzes,id',
        ]);

        if (empty($validated['exercise_id']) && empty($validated['quiz_id'])) {
            return redirect()
                ->route('teacher.course.manage', $course->id)
                ->withErrors(['reference' => 'Please select an exercise or a quiz to attach.']);
        }

        if (!empty($validated['exercise_id'])) {
            $exercise = Exercise::where('id', $validated['exercise_id'])
                ->where('user_id', auth()->id())
                ->firstOrFail();

            $course->exercises()->syncWithoutDetaching([$exercise->id]);
        }

        if (!empty($validated['quiz_id'])) {
            $quiz = Quiz::where('id', $validated['quiz_id'])
                ->where('user_id', auth()->id())
                ->firstOrFail();

            $course->quizzes()->syncWithoutDetaching([$quiz->id]);
        }

        return redirect()
            ->route('teacher.course.manage', $course->id)
            ->with('success', 'Reference(s) attached successfully.');
    }

    public function storeModule(Request $request, $id)
    {
        $course = Course::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $course->modules()->create($validated);
        $course->update(['modules_count' => $course->modules()->count()]);

        return redirect()
            ->route('teacher.course.manage', $course->id)
            ->with('success', 'Module added successfully.');
    }

    public function updateModule(Request $request, $id, $moduleId)
    {
        $course = Course::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $module = $course->modules()->where('id', $moduleId)->firstOrFail();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $module->update($validated);

        return redirect()
            ->route('teacher.course.manage', $course->id)
            ->with('success', 'Module updated successfully.');
    }

    public function destroyModule($id, $moduleId)
    {
        $course = Course::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $module = $course->modules()->where('id', $moduleId)->firstOrFail();
        $module->delete();
        $course->update(['modules_count' => $course->modules()->count()]);

        return redirect()
            ->route('teacher.course.manage', $course->id)
            ->with('success', 'Module deleted successfully.');
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
