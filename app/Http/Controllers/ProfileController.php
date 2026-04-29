<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        \App\Services\AchievementService::checkAll($user);
        
        return view('profile');
    }

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
            'language'       => ['nullable', 'string', 'in:en,fr,ar'],
        ]);

        if ($request->hasFile('photo_file')) {
            $path = $request->file('photo_file')->store('profile-photos', 'public');
            $validated['photo'] = asset('storage/' . $path);
        }

        $user->update($validated);

        return back()->with('status', 'Profile updated successfully!');
    }
    public function show($id)
    {
        $user = \App\Models\User::with(['ownedGroups', 'memberGroups', 'discussions'])->findOrFail($id);
        
        // If viewing own profile, redirect to main profile
        if ($id == auth()->id()) {
            return redirect()->route('profile');
        }

        // Check connection status
        $connection = \App\Models\Connection::where(function($q) use ($id) {
            $q->where('user_id', auth()->id())->where('friend_id', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('user_id', $id)->where('friend_id', auth()->id());
        })->first();

        $connectionStatus = $connection ? $connection->status : 'none';
        $isRequester = $connection && $connection->user_id === auth()->id();

        return view('other_profile', compact('user', 'connectionStatus', 'isRequester', 'connection'));
    }

    public function sendRequest($id)
    {
        $sender = auth()->user();
        $receiver = \App\Models\User::findOrFail($id);

        if ($sender->id == $receiver->id) return back();

        $connection = \App\Models\Connection::firstOrCreate([
            'user_id' => $sender->id,
            'friend_id' => $receiver->id,
        ]);

        \App\Models\UserNotification::create([
            'user_id' => $receiver->id,
            'type'    => 'connection_request',
            'title'   => 'New Connection Request',
            'body'    => $sender->name . ' wants to connect with you.',
            'data'    => ['connection_id' => $connection->id],
            'points'  => 0,
        ]);

        return back()->with('status', 'Connection request sent!');
    }

    public function handleRequest(Request $request, $id)
    {
        $connection = \App\Models\Connection::findOrFail($id);
        $status = $request->input('status'); // accepted or rejected

        if ($connection->friend_id !== auth()->id()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $connection->update(['status' => $status]);

        // Mark notification as read
        \App\Models\UserNotification::where('user_id', auth()->id())
            ->where('type', 'connection_request')
            ->whereJsonContains('data->connection_id', (int)$id)
            ->update(['read_at' => now()]);

        if ($status === 'accepted') {
            \App\Models\UserNotification::create([
                'user_id' => $connection->user_id,
                'type'    => 'connection_accepted',
                'title'   => 'Request Accepted',
                'body'    => auth()->user()->name . ' accepted your connection request!',
                'points'  => 10,
            ]);
        }

        return back()->with('status', 'Request ' . $status);
    }
}
