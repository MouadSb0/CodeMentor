<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $activities = Activity::where('user_id', auth()->id())
            ->latest()
            ->get();

        $recentActivities = $activities->take(3);

        $showBonusModal = false;
        $bonusAmount = 0;

        $user = auth()->user();
        if (!$user->last_bonus_at || !$user->last_bonus_at->isToday()) {
            $showBonusModal = true;
            $bonusAmount = rand(10, 500);
            session(['daily_bonus' => $bonusAmount]);
        }

        return view('dashboard', compact('recentActivities', 'activities', 'showBonusModal', 'bonusAmount'));
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
