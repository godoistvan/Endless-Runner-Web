<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request, AuthService $auth)
    {
        $data = $request->validated();
        $auth->register($data);

        return redirect()->route('login.show')->with('status', 'Registered successfully. Please login.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request, AuthService $auth)
    {
        $credentials = $request->validated();
        if ($auth->attempt($credentials['username'], $credentials['password'], $request)) {
            return redirect()->route('leaderboard.index')->with('status', 'Login OK');
        }
        return back()->withErrors(['username' => 'Invalid credentials'])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        app(AuthService::class)->logout($request);
        return redirect()->route('login.show');
    }
}
