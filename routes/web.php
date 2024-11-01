<?php

use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Ruta de inicio sin autenticación
Route::get('/', function () {
  return view('inicio'); // Cargar la vista inicio al entrar en la raíz
})->name('inicio');

// Ruta de login
Route::get('/login', [LoginBasic::class, 'index'])->name('login');
Route::post('/login', [LoginBasic::class, 'login'])->name('login.post'); // Ruta POST para autenticar

// Rutas de autenticación adicionales
Route::get('/register', [RegisterBasic::class, 'index'])->name('register');
Route::post('/register', [RegisterBasic::class, 'register'])->name('register.post');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');

// Ruta protegida para el dashboard, solo accesible si el usuario está autenticado
Route::get('/dashboard-analytics', [Analytics::class, 'index'])->name('dashboard-analytics')->middleware('auth');

// Ruta para cerrar sesión
Route::post('/logout', function () {
  Auth::logout();
  return redirect('/login');
})->name('logout');
