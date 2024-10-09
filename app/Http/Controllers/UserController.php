<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentativa de login com as credenciais fornecidas
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Se o login for bem-sucedido, redireciona para o dashboard
            return redirect()->intended('dashboard');
        } else {
            // Se o login falhar, retorna à página de login com mensagem de erro
            return redirect()->back()->withErrors([
                'loginError' => 'Email ou senha incorretos. Tente novamente.',
            ])->withInput($request->except('password'));
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('dashboard');
    }
}
