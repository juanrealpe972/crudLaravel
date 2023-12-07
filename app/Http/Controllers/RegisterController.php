<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->request->add(["nombre" => Str::slug($request->nombre)]); //Se utiliza para que valida que no exista en la base de datos

        $this->validate($request, [
            'nombre' => 'required | unique:users|max:30',
            'email' => 'required|unique:users|email|max:60',
            'telefono' => 'required ',
            'password' => 'required|min:6' //Con confirmed podemos encriptar la contraseña
        ]);

        User::create([
            "nombre" => $request->nombre,
            "email" => $request->email,
            "telefono" => $request->telefono,
            "password" => Hash::make($request->password)
            // "password"=> bcrypt($request->password)
        ]);
        Auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);//Sirve para autenticar un usuario 

        return redirect()->route("login");
    }
}
