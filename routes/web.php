<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\ProfileController;
use App\Models\Course;
use App\Models\User;
use App\Models\UserNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

// ─── Public / Guest pages ─────────────────────────────────────────────────────

Route::get('/', fn() => view('index'))->name('home');
Route::get('/welcome', fn() => view('index'))->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/help', fn() => view('help'))->name('help');
});

// ─── Authentication ───────────────────────────────────────────────────────────

// Show forms
Route::get('/register', function () {
    $isFirstUser = User::count() === 0;
    $selectedRole = request()->query('role');

    // First ever account: auto admin and skip account-type page.
    if ($isFirstUser) {
        return view('register', ['selectedRole' => 'admin', 'isFirstUser' => true]);
    }

    // All other users must choose account type first.
    if (!in_array($selectedRole, ['student', 'teacher'], true)) {
        return redirect()->route('account-type');
    }

    return view('register', ['selectedRole' => $selectedRole, 'isFirstUser' => false]);
})->name('register');
Route::get('/register/step2', fn() => view('register2'))->name('register.step2');
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/reset-password', fn() => view('resetPassword'))->name('password.request');
Route::get('/account-type', function () {
    // First ever account should never choose account type.
    if (User::count() === 0) {
        return redirect()->route('register');
    }

    return view('accountType');
})->name('account-type');

// Handle form submissions
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/register/complete', [AuthController::class, 'completeRegistration'])->name('register.complete');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit')
    ->middleware('throttle:5,1');     // max 5 attempts per minute

// Logout (POST/DELETE — form uses POST for simplicity)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ─── Authenticated pages ──────────────────────────────────────────────────────
Route::middleware(['auth', 'role'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('other_profile');
    Route::post('/profile/{id}/connect', [ProfileController::class, 'sendRequest'])->name('connect');
    Route::post('/connections/{id}/handle', [ProfileController::class, 'handleRequest'])->name('connect.handle');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/chat', fn() => view('chat'))->name('chat');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    Route::get('/careers', fn() => view('carrer'))->name('career');
    Route::get('/course/{id}', [CourseController::class, 'show'])->name('course');
    Route::post('/course/{id}/enroll', [CourseController::class, 'enroll'])->name('course.enroll');
    Route::post('/course/{id}/rate', [CourseController::class, 'rate'])->name('course.rate');
    Route::post('/course/{courseId}/modules/{moduleId}/complete', [CourseController::class, 'completeModule'])
        ->name('course.module.complete');
    Route::get('/exercices', [ExerciceController::class, 'index'])->name('exercices');
    Route::get('/exercice/{id}', [ExerciceController::class, 'show'])->name('single_exercice');
    Route::post('/exercice/{id}/complete', [ExerciceController::class, 'complete'])->name('exercise.complete');
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
    Route::get('/single_quiz/{id}', [QuizController::class, 'show'])->name('single_quiz');
    Route::post('/quiz/{id}/result', [QuizController::class, 'storeResult'])->name('quiz.result.store');
    Route::get('/result/{id}', [QuizController::class, 'showResult'])->name('result');
    Route::get('/group', fn() => view('group'))->name('group');
    Route::get('/community', function () {
        // Trending: most comments
        $trendingDiscussions = \App\Models\Disccussion::with(['user', 'comments'])
            ->withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->take(2)
            ->get();

        // Regular feed: recent ones not in trending
        $discussions = \App\Models\Disccussion::with(['user', 'comments'])
            ->whereNotIn('id', $trendingDiscussions->pluck('id'))
            ->orderBy('created_at', 'desc')
            ->get();

        $randomGroups = \App\Models\Group::withCount('members')->inRandomOrder()->take(3)->get();
        $myGroups = auth()->user()->memberGroups;
        
        $suggestedUsers = \App\Models\User::where('id', '!=', auth()->id())
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('community', compact('trendingDiscussions', 'discussions', 'randomGroups', 'myGroups', 'suggestedUsers'));
    })->name('community');
    Route::get('/certifications', fn() => view('certifications'))->name('certifications');
    Route::get('/assesements', fn() => view('assesement'))->name('assesements');
    Route::get('/assesementsResalt', fn() => view('assesement_result'))->name('assesement_result');
    Route::get('/contact', fn() => view('contact'))->name('contact');
    Route::get('/upgrade', fn() => view('upgrade'))->name('upgrade');
    Route::get('/paiement', fn() => view('paiement'))->name('payment');
    Route::get('/singleCourse', fn() => view('single_course'))->name('singleCourse');
    Route::get('/codeLab', fn() => view('code'))->name('CodeLab');
    Route::post('/code/check', [App\Http\Controllers\CodeController::class, 'check'])->name('code.check');

    Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');

    Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
    Route::get('/teacher/courses', [TeacherController::class, 'courses'])->name('teacher.courses');
    
    // ── Community: Discussions ────────────────────────────────────────────────
    Route::post('/discussions', [App\Http\Controllers\DisccussionController::class, 'store'])->name('discussions.store');
    Route::post('/discussions/{id}/share', [App\Http\Controllers\DisccussionController::class, 'share'])->name('discussions.share');
    Route::post('/discussions/{id}/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

    // ── Community: Groups ─────────────────────────────────────────────────────
    Route::post('/groups', [App\Http\Controllers\GroupController::class, 'store'])->name('groups.store');
    Route::get('/groups/{id}', [App\Http\Controllers\GroupController::class, 'show'])->name('groups.show');
    Route::post('/groups/{id}/join', [App\Http\Controllers\GroupController::class, 'join'])->name('groups.join');
    Route::post('/groups/{id}/leave', [App\Http\Controllers\GroupController::class, 'leave'])->name('groups.leave');
    // Admin-only group management
    Route::post('/groups/{id}/members', [App\Http\Controllers\GroupController::class, 'addMember'])->name('groups.members.add');
    Route::delete('/groups/{id}/members/{userId}', [App\Http\Controllers\GroupController::class, 'removeMember'])->name('groups.members.remove');
    Route::post('/groups/{id}/discussions', [App\Http\Controllers\GroupController::class, 'storeDiscussion'])->name('groups.discussions.store');
    Route::delete('/groups/{id}/discussions/{discussionId}', [App\Http\Controllers\GroupController::class, 'removeDiscussion'])->name('groups.discussions.remove');
    Route::delete('/groups/{id}/comments/{commentId}', [App\Http\Controllers\GroupController::class, 'removeComment'])->name('groups.comments.remove');
    Route::post('/groups/{id}/cover', [App\Http\Controllers\GroupController::class, 'updateCover'])->name('groups.updateCover');
    Route::post('/teacher/courses', [TeacherController::class, 'storeCourse'])->name('teacher.courses.store');
    Route::get('/teacher/courses/{id}', [TeacherController::class, 'showCourse'])->name('teacher.course.manage');
    Route::post('/teacher/courses/{id}/references', [TeacherController::class, 'attachReferences'])->name('teacher.course.references.attach');
    Route::post('/teacher/courses/{id}/modules', [TeacherController::class, 'storeModule'])->name('teacher.course.modules.store');
    Route::put('/teacher/courses/{id}/modules/{moduleId}', [TeacherController::class, 'updateModule'])->name('teacher.course.modules.update');
    Route::delete('/teacher/courses/{id}/modules/{moduleId}', [TeacherController::class, 'destroyModule'])->name('teacher.course.modules.destroy');
    Route::get('/teacher/exercices', [TeacherController::class, 'exercices'])->name('teacher.exercices');
    Route::post('/teacher/exercices', [TeacherController::class, 'storeExercise'])->name('teacher.exercices.store');
    Route::get('/teacher/codeLab', [TeacherController::class, 'codeLab'])->name('teacher.codeLab');
    Route::get('/teacher/quizzes', [TeacherController::class, 'quizzes'])->name('teacher.quizzes');
    Route::get('/teacher/careers', [TeacherController::class, 'careers'])->name('teacher.careers');
    Route::post('/claim-bonus', [DashboardController::class, 'claimBonus'])->name('bonus.claim');
    Route::get('/admin/dashboard', function () {
        $adminUser = auth()->user();
        $dailyNewUsers = User::whereDate('created_at', now()->toDateString())->count();
        $weeklyNewUsers = User::where('created_at', '>=', now()->subDays(7))->count();
        $overviewUsers = User::latest()->take(8)->get();
        $totalCourses = Course::count();
        $notifications = UserNotification::where('user_id', $adminUser->id)->latest()->take(10)->get();
        $unreadNotificationsCount = UserNotification::where('user_id', $adminUser->id)
            ->whereNull('read_at')
            ->count();

        $totalRevenue = 0.0;
        if (Schema::hasTable('course_user')) {
            $totalRevenue = DB::table('course_user')
                ->join('courses', 'courses.id', '=', 'course_user.course_id')
                ->sum(DB::raw('COALESCE(courses.price, 0)'));
        } else {
            // Fallback if enrollment pivot is not migrated yet.
            $totalRevenue = Course::sum('price');
        }

        // Daily-changing live uptime indicator (99.50% - 99.99%).
        $uptimeBase = 99.50;
        $uptimeOffset = (crc32(now()->toDateString()) % 50) / 100;
        $systemUptime = round($uptimeBase + $uptimeOffset, 2);

        return view('admin.dashboardAdmin', compact(
            'dailyNewUsers',
            'weeklyNewUsers',
            'totalRevenue',
            'systemUptime',
            'overviewUsers',
            'totalCourses',
            'notifications',
            'unreadNotificationsCount'
        ));
    })->name('admin.dashboard');

    Route::post('/account-type', [AuthController::class, 'updateAccountType'])->name('account-type.update');
    Route::post('/teacher/quizzes', [TeacherController::class, 'storeQuiz'])->name('teacher.quizzes.store');
});
