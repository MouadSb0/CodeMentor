<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ExerciceController;
use Illuminate\Support\Facades\Route;

// ─── Public / Guest pages ─────────────────────────────────────────────────────

Route::get('/', fn() => view('index'))->name('home');
Route::get('/welcome', fn() => view('index'))->name('home');

// ─── Authentication ───────────────────────────────────────────────────────────

// Show forms
Route::get('/register', fn() => view('register'))->name('register');
Route::get('/register/step2', fn() => view('register2'))->name('register.step2');
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/reset-password', fn() => view('resetPassword'))->name('password.request');
Route::get('/account-type', fn() => view('accountType'))->name('account-type');

// Handle form submissions
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/register/complete', [AuthController::class, 'completeRegistration'])->name('register.complete');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit')
    ->middleware('throttle:5,1');     // max 5 attempts per minute

// Logout (POST/DELETE — form uses POST for simplicity)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ─── Authenticated pages ──────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', fn() => view('profile'))->name('profile');
    Route::get('/chat', fn() => view('chat'))->name('chat');
    Route::get('/courses', fn() => view('courses'))->name('courses');
    Route::get('/careers', fn() => view('carrer'))->name('career');
    Route::get('/course/{id}', fn() => view('single_course'))->name('course');
    Route::get('/exercices', [ExerciceController::class, 'index'])->name('exercices');
    Route::get('/exercice/{id}', [ExerciceController::class, 'show'])->name('single_exercice');
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
    Route::get('/single_quiz/{id}', [QuizController::class, 'show'])->name('single_quiz');
    Route::post('/quiz/{id}/result', [QuizController::class, 'storeResult'])->name('quiz.result.store');
    Route::get('/result/{id}', [QuizController::class, 'showResult'])->name('result');
    Route::get('/group', fn() => view('group'))->name('group');
    Route::get('/community', fn() => view('community'))->name('community');
    Route::get('/certifications', fn() => view('certifications'))->name('certifications');
    Route::get('/assesements', fn() => view('assesement'))->name('assesements');
    Route::get('/assesementsResalt', fn() => view('assesement_result'))->name('assesement_result');
    Route::get('/contact', fn() => view('contact'))->name('contact');
    Route::get('/singleCourse', fn() => view('single_course'))->name('singleCourse');
    Route::get('/codeLab', fn() => view('code'))->name('CodeLab');

    Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');

    Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
    Route::get('/teacher/courses', [TeacherController::class, 'courses'])->name('teacher.courses');
    Route::post('/teacher/courses', [TeacherController::class, 'storeCourse'])->name('teacher.courses.store');
    Route::get('/teacher/exercices', [TeacherController::class, 'exercices'])->name('teacher.exercices');
    Route::post('/teacher/exercices', [TeacherController::class, 'storeExercise'])->name('teacher.exercices.store');
    Route::get('/teacher/codeLab', [TeacherController::class, 'codeLab'])->name('teacher.codeLab');
    Route::get('/teacher/quizzes', [TeacherController::class, 'quizzes'])->name('teacher.quizzes');
    Route::get('/teacher/careers', [TeacherController::class, 'careers'])->name('teacher.careers');
    Route::post('/claim-bonus', [DashboardController::class, 'claimBonus'])->name('bonus.claim');
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');

    Route::post('/account-type', [AuthController::class, 'updateAccountType'])->name('account-type.update');
    Route::post('/teacher/quizzes', [TeacherController::class, 'storeQuiz'])->name('teacher.quizzes.store');
});
