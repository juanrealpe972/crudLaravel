@extends('layouts.template')

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-80 bg-white rounded-lg shadow-xl mt-20">
            <div class="w-full h-9 flex items-center rounded-t-md bg-cyan-600 m text-white">
                <a class="ml-6" href="/"><i><-</i></a>
                <label for="">Volver</label>
            </div>
            <div class=" px-6 py-4">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="mb-1 block uppercase text-cyan-900 font-semibold">email</label>
                        <input type="text" id="email" name="email" placeholder="email"
                            class="border p-2 w-full rounded-lg @error('email') border-red-500 @enderror "
                            value="{{ old('email') }}">
                        @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="mb-1 block uppercase text-cyan-900 font-semibold">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña"
                            class="border p-2 w-full rounded-lg @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="submit" value="Iniciar sesión"
                        class="bg-cyan-900 hover:bg-cyan-600 transition-colors cursor-pointer uppercase font-semibold w-full p-2 text-white rounded-lg">
                    </form>
                </div>
            </div>
        </div>
@endsection