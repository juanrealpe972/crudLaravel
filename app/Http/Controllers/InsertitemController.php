<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class InsertitemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'telefono' => 'required',
            'email' => 'required|unique:items|max:255',
        ]);

        $item = new Item();
        $item->nombre = $request->input('nombre');
        $item->apellido = $request->input('apellido');
        $item->telefono = $request->input('telefono');
        $item->email = $request->input('email');
        $item->save();

        return view('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => 'required|max:255',
            'apellido' => 'required|max:255',
            "telefono" => "required|max:255",
            "email" => "required|max:255|unique:items,email".$id,
        ]);

        $item = Item::find($id);
        $item->nombre = $request->input('nombre');
        $item->apellido = $request->input('apellido');
        $item->telefono = $request->input('telefono');
        $item->email = $request->input('email');
        $item->save();

        return view('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('items');
    }
}
