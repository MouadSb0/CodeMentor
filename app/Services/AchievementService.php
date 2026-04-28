<?php

namespace App\Services;

use App\Models\User;
use App\Models\Achivement;
use App\Models\Course;
use App\Models\Connection;

class AchievementService
{
    public static function checkAll(User $user)
    {
        self::checkSecureDev($user);
        self::checkCloudGuru($user);
        self::checkRapidLearner($user);
        self::checkNetworking($user);
    }

    public static function checkSecureDev(User $user)
    {
        if ($user->achievements()->where('type', 'secure_dev')->exists()) return;

        if ($user->role === 'student') {
            // student get it after completing at least 4 security courses
            $completedSecurityCourses = $user->completedModules()
                ->whereHas('course', function($q) {
                    $q->where('category', 'LIKE', '%security%');
                })
                ->distinct('course_id')
                ->count();

            if ($completedSecurityCourses >= 4) {
                self::award($user, 'secure_dev', 'SECURE DEV', 'shield_lock', 'text-yellow-500', 'Completed at least 4 security courses.');
            }
        } elseif ($user->role === 'teacher') {
            // teacher get it after posting 3 courses about security
            $securityCoursesCount = Course::where('user_id', $user->id)
                ->where('category', 'LIKE', '%security%')
                ->count();

            if ($securityCoursesCount >= 3) {
                self::award($user, 'secure_dev', 'SECURE DEV', 'shield_lock', 'text-yellow-500', 'Posted 3 courses about security.');
            }
        }
    }

    public static function checkCloudGuru(User $user)
    {
        if ($user->achievements()->where('type', 'cloud_guru')->exists()) return;

        if ($user->role === 'student') {
            // student get it after completing at least 5 lessons and pass 3 quizzes with more than 50% on CLOUD courses
            $cloudLessonsCount = $user->completedModules()
                ->whereHas('course', function($q) {
                    $q->where('category', 'LIKE', '%cloud%');
                })
                ->count();

            // Assuming results table has quizzes info
            $passingCloudQuizzes = \DB::table('results')
                ->where('user_id', $user->id)
                ->where('score', '>', 50)
                ->whereExists(function ($query) {
                    $query->select(\DB::raw(1))
                          ->from('quizzes')
                          ->join('courses', 'quizzes.course_id', '=', 'courses.id')
                          ->whereRaw('quizzes.id = results.quiz_id')
                          ->where('courses.category', 'LIKE', '%cloud%');
                })
                ->count();

            if ($cloudLessonsCount >= 5 && $passingCloudQuizzes >= 3) {
                self::award($user, 'cloud_guru', 'CLOUD GURU', 'cloud', 'text-blue-500', 'Completed 5 cloud lessons and passed 3 cloud quizzes.');
            }
        } elseif ($user->role === 'teacher') {
            // teacher get it after posting 3 courses and 3 exercices about clouding
            $cloudCoursesCount = Course::where('user_id', $user->id)
                ->where('category', 'LIKE', '%cloud%')
                ->count();
            
            $cloudExercisesCount = \App\Models\Exercise::where('user_id', $user->id)
                ->whereHas('courses', function($q) {
                    $q->where('category', 'LIKE', '%cloud%');
                })
                ->count();

            if ($cloudCoursesCount >= 3 && $cloudExercisesCount >= 3) {
                self::award($user, 'cloud_guru', 'CLOUD GURU', 'cloud', 'text-blue-500', 'Posted 3 courses and 3 exercises about clouding.');
            }
        }
    }

    public static function checkRapidLearner(User $user)
    {
        if ($user->achievements()->where('type', 'rapid_learner')->exists()) return;

        if ($user->role === 'student') {
            // student get it after completing at least 10 courses in a week
            $coursesThisWeek = $user->enrolledCourses()
                ->wherePivot('completed_at', '>=', now()->subWeek())
                ->count();
            
            // Actually "completing" 10 courses in a week is hard, let's check completed courses if exists, or just enrolled as proxy if logic is simple.
            // But user said "completing".
            
            if ($coursesThisWeek >= 10) {
                 self::award($user, 'rapid_learner', 'RAPID LEANER', 'bolt', 'text-red-500', 'Completed at least 10 courses in a single week.');
            }
        }
    }

    public static function checkNetworking(User $user)
    {
        if ($user->achievements()->where('type', 'networking')->exists()) return;

        // user get it after he makes at least 10 connect with other users
        $connectionsCount = Connection::where(function($q) use ($user) {
                $q->where('user_id', $user->id)->orWhere('friend_id', $user->id);
            })
            ->where('status', 'accepted')
            ->count();

        if ($connectionsCount >= 10) {
            self::award($user, 'networking', 'NETWORKING', 'group', 'text-green-500', 'Connected with at least 10 other users.');
        }
    }

    private static function award(User $user, $type, $name, $icon, $color, $description)
    {
        Achivement::create([
            'user_id' => $user->id,
            'type' => $type,
            'name' => $name,
            'icon' => $icon,
            'color' => $color,
            'description' => $description
        ]);
        
        // Also notify user
        \App\Models\UserNotification::create([
            'user_id' => $user->id,
            'type' => 'achievement',
            'message' => "Congratulations! You've earned the {$name} achievement!",
            'data' => ['achievement_type' => $type]
        ]);
    }
}
