<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ?string $role = null): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $currentRouteName = $request->route()->getName();
        $request->session()->put('user_role', $user->role);

        // Admin rules
        if ($user->role === 'admin') {
            // Admin can access everything except teacher folder routes
            if (str_starts_with($currentRouteName, 'teacher.')) {
                abort(403, 'Admins cannot access teacher specific areas.');
            }
            return $next($request);
        }

        // Teacher rules
        if ($user->role === 'teacher') {
            // Teacher specific routes
            if (str_starts_with($currentRouteName, 'teacher.')) {
                return $next($request);
            }

            // Allowed student/common views for teachers
            $allowedTeacherRoutes = [
                'dashboard', 'assesements', 'assesement_result', 'career', 
                'certifications', 'chat_group', 'community', 'contact', 
                'group', 'other_profile', 'result', 'single_course', 
                'single_exercice', 'single_quiz', 'profile',
                'course', 'singleCourse', 'CodeLab', 'code.check', 'activities.store', 'bonus.claim', 'profile.update',
                'exercices', 'quizzes', 'quiz.result.store',
                'groups.store', 'groups.show', 'groups.join', 'groups.leave', 
                'groups.members.invite', 'invitations.accept', 'invitations.reject', 
                'groups.members.remove', 'groups.discussions.store', 
                'groups.discussions.remove', 'groups.comments.remove', 'groups.updateCover'
            ];

            if (in_array($currentRouteName, $allowedTeacherRoutes)) {
                return $next($request);
            }

            abort(403, 'Teachers do not have access to this page.');
        }

        // Student rules
        if ($user->role === 'student') {
            // Student cannot access teacher or admin specific areas
            if (str_starts_with($currentRouteName, 'teacher.') || str_starts_with($currentRouteName, 'admin.')) {
                abort(403, 'Students do not have access to this page.');
            }
            return $next($request);
        }

        abort(403, 'Unauthorized role.');
    }
}
