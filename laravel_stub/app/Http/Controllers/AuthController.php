<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => ['required','string','max:255','unique:users,userName'],
            'email' => ['required','email','max:255','unique:users,userEmail'],
            'password' => ['required','string','min:8','confirmed'],
            'accepted' => ['accepted'],
        ]);

        $user = new User();
        $user->userName = $data['username'];
        $user->userEmail = $data['email'];
        $user->userPassword = Hash::make($data['password']);
        $user->save();

        return redirect()->route('login.show')->with('status', 'Registered successfully. Please login.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required','string'],
            'password' => ['required','string'],
        ]);

        // The DB uses custom columns; mimic with manual attempt
        $user = User::where('userName', $credentials['username'])->first();
        if ($user && Hash::check($credentials['password'], $user->userPassword)) {
            // Log in via session (not using Laravel guards here to avoid customizing providers)
            $request->session()->put('username', $user->userName);
            $request->session()->put('user_id', $user->userID ?? $user->id ?? null);
            return redirect()->route('leaderboard.index')->with('status', 'Login OK');
        }

        // Optional: allow legacy MD5 one-time upgrade (uncomment if needed)
        // if ($user && $user->userPassword === md5($credentials['password'])) {
        //     $user->userPassword = Hash::make($credentials['password']);
        //     $user->save();
        //     $request->session()->put('username', $user->userName);
        //     $request->session()->put('user_id', $user->userID ?? $user->id ?? null);
        //     return redirect()->route('leaderboard.index')->with('status', 'Login OK (password upgraded)');
        // }

        return back()->withErrors(['username' => 'Invalid credentials'])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.show');
    }
}

