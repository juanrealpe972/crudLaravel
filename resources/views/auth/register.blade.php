@extends('layouts.template')

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-80 bg-white rounded-lg shadow-xl mt-7">
            <div class="w-full h-9 flex items-center rounded-t-md bg-indigo-600 m text-white">
                <a class="ml-6 mr-3" href="/"><i>&#11164;</i></a>
                <label for="">Volver</label>
            </div>
            <div class=" px-6 py-4">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="mb-1 block uppercase text-cyan-900 font-semibold">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre"
                            class="border p-2 w-full rounded-lg @error('nombre') border-red-500 @enderror "
                            value="{{ old('nombre') }}">
                        @error('nombre')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="mb-1 block uppercase text-cyan-900 font-semibold">Gmail</label>
                        <input type="email" id="email" name="email" placeholder="Gmail"
                            class="border p-2 w-full rounded-lg @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="mb-1 block uppercase text-cyan-900 font-semibold">
                            Telefono</label>
                        <input type="number" id="telefono" name="telefono" placeholder="Telefono"
                            class="border p-2 w-full rounded-lg" min="0">
                        @error('telefono')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="mb-1 block uppercase text-cyan-900 font-semibold">Password</label>
                        <input type="password" id="password" name="password" placeholder="password"
                            class="border p-2 w-full rounded-lg">
                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="submit" value="Crear cuenta"
                        class="bg-indigo-900 hover:bg-indigo-600 transition-colors cursor-pointer uppercase font-semibold w-full p-2 text-white rounded-lg">
                </form>
            </div>
        </div>
    </div>
@endsection
