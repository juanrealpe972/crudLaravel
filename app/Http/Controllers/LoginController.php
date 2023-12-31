<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!auth()->attempt($request->only("email", "password"))) {
            return back()->with("mensaje", "Error en la autenticación, algo no coincide");
        }

        return redirect()->route('items.index');
    }

}
