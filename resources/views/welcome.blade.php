@extends('layouts.template')

@section('contenido')
    <div class="w-full flex justify-center ">
        <div class="flex items-center justify-center bg-slate-100 w-5/12 p-3 rounded-3xl mt-36">
            <div class="p-6 flex items-center justify-center flex-col">
                <div class="flex flex-col text pl-3">
                    <label class="">Tienes cuenta?</label>
                    <a href="{{ route('login') }}" class="p-2 w-36 h-auto text-center bg-cyan-900 hover:bg-cyan-600 hover:text-white rounded-xl">Iniciar Sesión</a>
                </div>
                <div class="flex flex-col pl-3">
                    <label class="">No tienes cuenta?</label>
                    <a href="{{ route('register.index') }}" class="p-2 w-36 h-auto text-center bg-cyan-900 hover:bg-cyan-600 hover:text-white rounded-xl">Crear cuenta</a>
                </div>
            </div>
        </div>
    </div>
@endsection