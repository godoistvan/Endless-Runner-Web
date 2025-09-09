<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RemoveFromCartRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'productID' => ['required','integer']
        ];
    }
}

