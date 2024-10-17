<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Asegúrate de tener esta importación
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Muestra el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Maneja el registro del usuario
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $this->validator($request->all())->validate();

        // Crear un nuevo usuario
        $user = $this->create($request->all());

        // Iniciar sesión después del registro
        Auth::login($user);

        // Redirigir al usuario a la página de inicio
        return redirect('/catalog');
    }

    // Validar los datos del registro
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
    }

    // Crear un nuevo usuario
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
