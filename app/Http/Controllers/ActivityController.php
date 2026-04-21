<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $icons = ['code', 'school', 'dashboard', 'research', 'bolt', 'military_tech', 'menu_book', 'timer', 'terminal', 'design_services'];
        $randomIcon = $icons[array_rand($icons)];

        Activity::create([
            'user_id' => auth()->id(),
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $randomIcon,
        ]);

        return redirect()->back()->with('success', 'The activity has been created successfully');
    }
}
