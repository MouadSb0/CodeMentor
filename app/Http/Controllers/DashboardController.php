<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\UserNotification;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = session('user_role', auth()->user()->role);

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        if ($role === 'teacher') {
            return redirect()->route('teacher.dashboard');
        }

        $user = auth()->user();
        
        // 1. Activities
        $activities = Activity::where('user_id', $user->id)
            ->latest()
            ->get();
        $recentActivities = $activities->take(3);

        // 2. Courses Stats
        $enrolledCourses = $user->enrolledCourses;
        $activeCoursesCount = $enrolledCourses->count();
        
        // 3. Progress Calculation
        $totalModulesCount = \App\Models\Module::whereIn('course_id', $enrolledCourses->pluck('id'))->count();
        $completedModulesCount = $user->completedModules()->count();
        $progressPercentage = $totalModulesCount > 0 ? round(($completedModulesCount / $totalModulesCount) * 100) : 0;

        // 4. Streak Calculation
        $activityDates = $activities->pluck('created_at')
            ->map(fn($date) => $date->format('Y-m-d'))
            ->unique()
            ->values();
            
        $streak = 0;
        if ($activityDates->isNotEmpty()) {
            $today = now()->format('Y-m-d');
            $yesterday = now()->subDay()->format('Y-m-d');
            
            if ($activityDates[0] === $today || $activityDates[0] === $yesterday) {
                $streak = 1;
                for ($i = 0; $i < $activityDates->count() - 1; $i++) {
                    $current = \Carbon\Carbon::parse($activityDates[$i]);
                    $next = \Carbon\Carbon::parse($activityDates[$i + 1]);
                    
                    if ($current->diffInDays($next) === 1) {
                        $streak++;
                    } else {
                        break;
                    }
                }
            }
        }

        // 5. Hours Calculation (Estimate: 1.5 hours per completed module + 0.5 per activity)
        $totalHours = ($completedModulesCount * 1.5) + ($activities->count() * 0.5);
        $totalHours = round($totalHours);

        // 6. Continue Learning logic
        $continueCourse = null;
        $currentModule = null;

        // Try to find the most recent interaction in module_user
        $lastCompletedModuleUser = \Illuminate\Support\Facades\DB::table('module_user')
            ->where('user_id', $user->id)
            ->orderBy('completed_at', 'desc')
            ->first();

        if ($lastCompletedModuleUser) {
            $continueCourse = \App\Models\Course::find($lastCompletedModuleUser->course_id);
            // Find the next module in this course
            $currentModule = \App\Models\Module::where('course_id', $continueCourse->id)
                ->where('id', '>', $lastCompletedModuleUser->module_id)
                ->orderBy('id', 'asc')
                ->first();
                
            // If no "next" module, they finished it, maybe show the last one or another course
            if (!$currentModule) {
                $currentModule = \App\Models\Module::where('course_id', $continueCourse->id)
                    ->orderBy('id', 'desc')
                    ->first();
            }
        } elseif ($activeCoursesCount > 0) {
            // No modules completed yet, take the most recent enrollment
            $continueCourse = $user->enrolledCourses()->latest('course_user.created_at')->first();
            if ($continueCourse) {
                $currentModule = \App\Models\Module::where('course_id', $continueCourse->id)
                    ->orderBy('id', 'asc')
                    ->first();
            }
        }

        // 7. Suggested Group logic
        $joinedGroupIds = $user->memberGroups()->pluck('groups.id');
        $suggestedGroup = \App\Models\Group::whereNotIn('id', $joinedGroupIds)
            ->withCount('members')
            ->inRandomOrder()
            ->first();

        // If no group found (joined all), pick one anyway
        if (!$suggestedGroup) {
            $suggestedGroup = \App\Models\Group::withCount('members')->inRandomOrder()->first();
        }

        // 8. Bonus Modal Logic
        $showBonusModal = false;
        $bonusAmount = 0;
        if (!$user->last_bonus_at || !$user->last_bonus_at->isToday()) {
            $showBonusModal = true;
            $bonusAmount = rand(10, 500);
            session(['daily_bonus' => $bonusAmount]);
        }

        return view('dashboard', compact(
            'recentActivities', 
            'activities', 
            'showBonusModal', 
            'bonusAmount',
            'streak',
            'activeCoursesCount',
            'progressPercentage',
            'totalHours',
            'continueCourse',
            'currentModule',
            'suggestedGroup'
        ));
    }
    public function claimBonus(Request $request)
    {
        $user = auth()->user();

        if (!$user->last_bonus_at || !$user->last_bonus_at->isToday()) {
            $bonus = session('daily_bonus', rand(10, 500));
            $user->points += $bonus;
            $user->last_bonus_at = now();
            $user->save();
            session()->forget('daily_bonus');

            if ($user->role === 'teacher') {
                UserNotification::create([
                    'user_id' => $user->id,
                    'type' => 'points',
                    'title' => 'Points received',
                    'body' => "You received {$bonus} XP points.",
                    'points' => $bonus,
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => "You've successfully claimed $bonus points!",
                'new_points' => $user->points
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'You have already claimed your bonus today.'
        ], 403);
    }
}
