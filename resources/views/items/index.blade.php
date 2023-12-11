@extends('layouts.template')
@section('contenido')
    <div class="container m-4">
        <h2 class="mb-4">Lista de Items</h2>
        <a href="{{ url('items/create') }}" class="rounded-lg p-3 text-white bg-cyan-900 hover:bg-cyan-600"> Nuevo Items</a>
        <div class="containe mt-8">
            <table class="w-9/12 border-collapse">
                <thead>
                    <tr>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">#</th>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">Nombre</th>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">Apellido</th>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">Telefono</th>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">Correo</th>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">Editar</th>
                        <th class="border-2 border-solid text-black p-2 bg-neutral-200 text-base">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td class="border-2 border-solid text-black p-2 text-center">{{ $item->id }}</td>
                            <td class="border-2 border-solid text-black p-2 left-0">{{ $item->nombre }}</td>
                            <td class="border-2 border-solid text-black p-2 left-0">{{ $item->apellido }}</td>
                            <td class="border-2 border-solid text-black p-2 left-0">{{ $item->telefono }}</td>
                            <td class="border-2 border-solid text-black p-2 left-0">{{ $item->email }}</td>
                            <td class="border-2 border-solid text-black p-2 text-center">
                                <a href="{{ url('items/' . $item->id . '/edit') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                            </td>
                            <td class="border-2 border-solid text-black p-2 text-center">
                                <form action="{{ url('items/' . $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection