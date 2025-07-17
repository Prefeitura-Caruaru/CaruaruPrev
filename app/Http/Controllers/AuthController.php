<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create()
    {
        return inertia('Auth/Login');
    }

    public function store(Request $request)
    {
        

        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string|min:6'
        ], [
            'login.required' => 'O campo login é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres'
        ]);

        if(!Auth::attempt($request->only('login', 'password'), true)) {
            throw ValidationException::withMessages([
                'login' => 'Credenciais inválidas. Por favor, verifique seu login e senha'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
