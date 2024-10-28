<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginBasic extends Controller
{
    public function index()
    {
        return view('content.authentications.auth-login-basic');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Intentar autenticarse con las credenciales proporcionadas
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Redirigir al dashboard si la autenticación es exitosa
            return redirect()->intended('/dashboard-analytics');
        }

        // Si la autenticación falla, devolver al formulario de login con un mensaje de error
        throw ValidationException::withMessages([
            'email' => __('The provided credentials do not match our records.'),
        ]);
    }
}
