@extends('layouts.template')
@section('contenido')

    <main>
        <div class="container p-4 m-3">
            <h2>Listado de Items</h2>
            <a href="{{ url('items/create') }}" class="p-2 bg-blue-500 text-white">Nuevo Item</a>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->apellido }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="{{ url('item/' . $item->id . '/edit') }}">Editar</a></td>
                            <td>
                                <form action="{{ url('item/') . $item->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
