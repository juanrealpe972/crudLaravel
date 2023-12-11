@extends('layouts.template')
@section('contenido')
    <main class="flex justify-center flex-col items-center">
        <h1 class="pt-4 text-3xl mb-3 font-bold">Registrar item</h1>
        <div>
            <form action="{{ url('items') }}" method="post">
                @csrf
                <div class="flex flex-col">
                    <label for="nombre">Nombre</label>
                    <div>
                        <input class="border border-gray-300 rounded px-2 py-1 text-sm text-gray-600" type="text" name="nombre" id="nombre" class="bg-red-50 w-48 h-3" placeholder="Nombre" value="{{ old('nombre') }}"  required>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="apellido">Apellido</label>
                    <div>
                        <input class="border border-gray-300 rounded px-2 py-1 text-sm text-gray-600" type="text" name="apellido" id="apellido" class="bg-red-50 w-48 h-3" placeholder="apellido" value="{{ old('apellido') }}" required>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="telefono">Telefono</label>
                    <div>
                        <input class="border border-gray-300 rounded px-2 py-1 text-sm text-gray-600" type="text" name="telefono" id="telefono" class="bg-red-50 w-48 h-3" placeholder="Telefono" value="{{ old('telefono') }}" required>
                    </div>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="email">GMAIL</label>
                    <div>
                        <input class="border border-gray-300 rounded px-2 py-1 text-sm text-gray-600" type="text" name="email" id="email" class="bg-red-50 w-48 h-3" placeholder="GMAIL" value="{{ old('email') }}" required>
                    </div>
                </div>
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" href="{{ url('items') }}">Regresar</a>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1.5 px-2 rounded" type="submit">Guardar</button>
            </form>
        </div>
    </main>
@endsection
