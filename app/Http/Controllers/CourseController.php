<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRating;
use App\Models\Module;
use App\Models\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * List all courses (student courses page).
     */
    public function index(Request $request)
    {
        $query = Course::query()->latest();

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        $courses = $query->paginate(6)->withQueryString();

        return view('courses', compact('courses'));
    }

    /**
     * Show a single course detail page.
     */
    public function show($id)
    {
        $course = Course::with('modules')->findOrFail($id);
        $userCourseRating = CourseRating::where('course_id', $course->id)
            ->where('user_id', auth()->id())
            ->value('rating');

        $user = auth()->user();
        $isEnrolled = $user->enrolledCourses()->where('course_id', $course->id)->exists();
        $totalModules = $course->modules->count();
        $completedModuleIds = $user->completedModules()
            ->wherePivot('course_id', $course->id)
            ->pluck('modules.id')
            ->all();
        $completedCount = count($completedModuleIds);
        $progressPercent = $totalModules > 0 ? (int) round(($completedCount / $totalModules) * 100) : 0;

        $notifications = $user->notifications()->take(8)->get();
        $unreadNotificationsCount = $user->notifications()->whereNull('read_at')->count();

        // Related courses from the same category (excluding current)
        $relatedCourses = Course::where('category', $course->category)
            ->where('id', '!=', $course->id)
            ->take(3)
            ->get();

        return view('single_course', compact(
            'course',
            'relatedCourses',
            'userCourseRating',
            'isEnrolled',
            'progressPercent',
            'completedModuleIds',
            'notifications',
            'unreadNotificationsCount'
        ));
    }

    public function enroll(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $user = auth()->user();
        $alreadyEnrolled = $user->enrolledCourses()->where('course_id', $course->id)->exists();

        $user->enrolledCourses()->syncWithoutDetaching([
            $course->id => ['enrolled_at' => now()],
        ]);

        if (!$alreadyEnrolled && $course->user_id && $course->user_id !== $user->id) {
            UserNotification::create([
                'user_id' => $course->user_id,
                'course_id' => $course->id,
                'type' => 'course_enrollment',
                'title' => 'New course enrollment',
                'body' => "{$user->name} started enrolling in \"{$course->title}\".",
            ]);
        }

        return redirect()
            ->route('course', $course->id)
            ->with('success', 'You are enrolled! Start completing modules to earn points.');
    }

    public function completeModule(Request $request, $courseId, $moduleId)
    {
        $course = Course::with('modules')->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $user = auth()->user();

        // Must be enrolled first.
        if (!$user->enrolledCourses()->where('course_id', $course->id)->exists()) {
            return redirect()
                ->route('course', $course->id)
                ->withErrors(['enroll' => 'Please enroll in the course before completing modules.']);
        }

        // Only award points once per module.
        $alreadyCompleted = $user->completedModules()->where('modules.id', $module->id)->exists();
        if ($alreadyCompleted) {
            return redirect()
                ->route('course', $course->id)
                ->with('success', 'Module already completed.');
        }

        $points = rand(10, 100);

        DB::transaction(function () use ($user, $course, $module, $points) {
            $user->completedModules()->attach($module->id, [
                'course_id' => $course->id,
                'points_awarded' => $points,
                'completed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $user->increment('points', $points);

            UserNotification::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
                'module_id' => $module->id,
                'type' => 'points',
                'title' => 'Points earned!',
                'body' => "You earned {$points} XP for completing \"{$module->title}\" in \"{$course->title}\".",
                'points' => $points,
            ]);
        });

        return redirect()
            ->route('course', $course->id)
            ->with('success', "Nice! You earned {$points} XP for completing {$module->title}.");
    }

    public function rate(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        CourseRating::updateOrCreate(
            [
                'course_id' => $course->id,
                'user_id' => auth()->id(),
            ],
            [
                'rating' => $validated['rating'],
            ]
        );

        $averageRating = CourseRating::where('course_id', $course->id)->avg('rating') ?? 0;
        $roundedAverage = round($averageRating, 1);
        $course->update(['rating' => $roundedAverage]);

        $rater = auth()->user();
        if ($course->user_id && $course->user_id !== $rater->id) {
            UserNotification::create([
                'user_id' => $course->user_id,
                'course_id' => $course->id,
                'type' => 'course_rating',
                'title' => 'New rating received',
                'body' => "New rating, the average rate of the course \"{$course->title}\" is {$roundedAverage}.",
            ]);
        }

        return redirect()
            ->route('course', $course->id)
            ->with('success', 'Thanks! Your rating has been saved.');
    }
}
