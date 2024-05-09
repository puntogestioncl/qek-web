<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest)
    {
        $credentials = [
            'email' => $loginRequest->email,
            'password' => $loginRequest->password
        ];

        if(Auth::attempt( [ 'email' => $credentials['email'], 'password' => $credentials['password'], 'state' => 1])){
            $token = $loginRequest->user()->createToken($loginRequest->token_name);

            return ['token' => $token->plainTextToken];
        }

        return response()->json("Usuario y/o contraseña inválido");
    }
}
