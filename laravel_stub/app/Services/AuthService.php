<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthService
{
    public function register(array $data): User
    {
        $user = new User();
        $user->userName = $data['username'];
        $user->userEmail = $data['email'];
        $user->userPassword = Hash::make($data['password']);
        $user->save();
        return $user;
    }

    public function attempt(string $username, string $password, Request $request): bool
    {
        $user = User::where('userName', $username)->first();
        if ($user && Hash::check($password, $user->userPassword)) {
            $request->session()->put('username', $user->userName);
            $request->session()->put('user_id', $user->userID ?? $user->id ?? null);
            return true;
        }

        // Legacy one-time MD5 upgrade (uncomment to enable)
        // if ($user && $user->userPassword === md5($password)) {
        //     $user->userPassword = Hash::make($password);
        //     $user->save();
        //     $request->session()->put('username', $user->userName);
        //     $request->session()->put('user_id', $user->userID ?? $user->id ?? null);
        //     return true;
        // }

        return false;
    }

    public function logout(Request $request): void
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}

