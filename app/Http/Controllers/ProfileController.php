<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name'           => ['sometimes', 'required', 'string', 'max:255'],
            'email'          => ['sometimes', 'required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'phone_number'   => ['nullable', 'string', 'max:20'],
            'github_account' => ['nullable', 'string', 'max:255'],
            'specialization' => ['nullable', 'string', 'max:255'],
            'institution'    => ['nullable', 'string', 'max:255'],
            'bio'            => ['nullable', 'string'],
            'photo'          => ['nullable', 'string', 'max:2048'],
            'photo_file'     => ['nullable', 'image', 'max:10240'],
        ]);

        if ($request->hasFile('photo_file')) {
            $path = $request->file('photo_file')->store('profile-photos', 'public');
            $validated['photo'] = asset('storage/' . $path);
        }

        $user->update($validated);

        return back()->with('status', 'Profile updated successfully!');
    }
}
