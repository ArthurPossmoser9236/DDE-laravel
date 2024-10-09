<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// welcome page
Route::get('/', [UserController::class, 'index'])->name('home.login');

// login page
Route::get('/login', function () {
    return view('login');  // View personalizada para o login
})->name('login');

// processamento login
Route::post('/login', [UserController::class, 'login'])->name('login.post');

// register page
Route::get('/cadastro', function () {
    return view('cadastro');  // View personalizada para o cadastro
});

// processamento register
Route::post('/register', [UserController::class, 'register'])->name('register');

// dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');  // View do dashboard após login
})->middleware('auth');

// esqueci a senha
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// redefinir senha
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// Rota de logout
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
