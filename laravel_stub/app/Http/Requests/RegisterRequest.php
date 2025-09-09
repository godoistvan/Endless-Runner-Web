<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'username' => ['required','string','max:255','unique:users,userName'],
            'email' => ['required','email','max:255','unique:users,userEmail'],
            'password' => ['required','string','min:8','confirmed'],
            'accepted' => ['accepted'],
        ];
    }
}

