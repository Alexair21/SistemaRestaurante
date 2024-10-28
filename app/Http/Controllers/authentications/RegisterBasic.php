<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de que el modelo User esté importado
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterBasic extends Controller
{
    public function index()
    {
        return view('content.authentications.auth-register-basic');
    }

    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'terms' => 'accepted'
        ]);

        // Crear el usuario en la base de datos
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Iniciar sesión automáticamente después del registro
        Auth::login($user);

        // Redirigir al dashboard
        return redirect()->intended('/dashboard-analytics');
    }
}
