<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->intended('dashboard');
        } else {
            
            return redirect()->back()->withErrors([
                'loginError' => 'As credenciais fornecidas estão incorretas ou a conta não existe.',
            ])->withInput($request->except('password'));
        }
    }
}
