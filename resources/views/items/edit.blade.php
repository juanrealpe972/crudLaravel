@extends('layouts.template')
@section('contenido')
<main>
    <div class="py-4">
        <h2>Registrar item</h2>
        <form action="{{ url('item').$item->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="flex">
                <label for="item">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="bg-red-50 w-48 h-3" placeholder="Nombre" value="{{ $item->nombre }}" required>
            </div>
            <div class="flex">
                <label for="item">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="bg-red-50 w-48 h-3" placeholder="apellido" value="{{ $item->apellido }}" required>
            </div>
            <div class="flex">
                <label for="item">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="bg-red-50 w-48 h-3" placeholder="Telefono" value="{{ $item->telefono }}" required>
            </div>
            <div class="flex">
                <label for="item">GMAIL</label>
                <input type="text" name="correo" id="correo" class="bg-red-50 w-48 h-3" placeholder="GMAIL" value="{{ $item->correo }}" required>
            </div>
            <a href="{{ url('item') }}">Regresar</a>
            <button type="submit">Guardar</button>
        </form>
    </div>
</main>