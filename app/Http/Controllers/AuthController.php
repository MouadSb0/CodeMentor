<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // ──────────────────────────────────────────────────────────────
    //  REGISTER
    // ──────────────────────────────────────────────────────────────

    /**
     * Handle the incoming registration request.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'                  => ['required', 'string', 'max:255'],
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number'          => ['required', 'string', 'max:30'],
            'github_account'        => ['nullable', 'string', 'max:255'],
            'password'              => ['required', 'confirmed', Password::min(8)],
            'terms'                 => ['accepted'],
        ], [
            'name.required'         => 'Please enter your full name.',
            'email.unique'          => 'This email address is already registered.',
            'phone_number.required' => 'A phone number is required.',
            'password.confirmed'    => 'The password confirmation does not match.',
            'terms.accepted'        => 'You must accept the Terms of Service and Privacy Policy.',
        ]);

        $user = User::create([
            'name'           => $validated['name'],
            'email'          => $validated['email'],
            'phone_number'   => $validated['phone_number'],
            'github_account' => $validated['github_account'] ?? null,
            'password'       => Hash::make($validated['password']),
            'role'           => User::count() === 0 ? 'admin' : ($request->role ?? 'student'), 
            'points'         => 0,
        ]);

        Auth::login($user);

        return redirect()->route('register.step2');
    }

    // ──────────────────────────────────────────────────────────────
    //  COMPLETE REGISTRATION (Step 2 → login redirect)
    // ──────────────────────────────────────────────────────────────

    /**
     * Called when the user submits Step 2.
     * Clears the temporary session key and redirects to login
     * with a success flash message.
     */
    public function completeRegistration(Request $request)
    {
        $user = Auth::user();

        // Redirect based on role
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard')
                ->with('status', '🎉 Welcome to your Admin Dashboard!');
        }

        if ($user->role === 'teacher') {
            return redirect()->route('teacher.dashboard')
                ->with('status', '🎉 Welcome to your Teacher Dashboard!');
        }

        return redirect()->route('dashboard')
            ->with('status', '🎉 Welcome to your Dashboard!');
    }

    // ──────────────────────────────────────────────────────────────
    //  LOGIN
    // ──────────────────────────────────────────────────────────────

    /**
     * Handle an incoming authentication request.
     * Throttled to 5 attempts per minute (via route middleware or manually here).
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Rate-limit: handled by the 'throttle:5,1' middleware on the route.

        $remember = $request->boolean('remember');

        // Attempt without the built-in 5-year remember token.
        if (! Auth::attempt($credentials, false)) {
            throw ValidationException::withMessages([
                'email' => __('These credentials do not match our records.'),
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();

        if ($remember) {
            // ... (keep the cookie logic)
            Cookie::queue(
                config('session.cookie'),
                $request->session()->getId(),
                60 * 24,
                config('session.path'),
                config('session.domain'),
                config('session.secure'),
                config('session.http_only'),
                false,
                config('session.same_site') ?? 'lax'
            );
        }

        if ($user->role === 'admin') {
            return redirect()->intended(route('admin.dashboard'));
        }

        if ($user->role === 'teacher') {
            return redirect()->intended(route('teacher.dashboard'));
        }

        return redirect()->intended(route('dashboard'));
    }

    // ──────────────────────────────────────────────────────────────
    //  LOGOUT
    // ──────────────────────────────────────────────────────────────

    /**
     * Update the user's role/account type.
     */
    public function updateAccountType(Request $request)
    {
        $request->validate([
            'account_type' => ['required', 'string', 'in:student,teacher'],
        ]);

        $user = Auth::user();
        $user->role = $request->account_type;
        $user->save();

        return redirect()->route('register.step2');
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
