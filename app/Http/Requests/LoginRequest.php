<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            'token_name' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'El Email es obligatorio',
            'email.email' => 'El Email debe ser una dirección de correo valido',
            'password.required' => 'El Password es obligatorio',
            'token_name.required' => 'El Token Name es obligatorio',
        ];
    }
}
