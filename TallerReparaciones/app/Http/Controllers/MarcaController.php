<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    // Mostrar lista de marcas
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    // Mostrar formulario para crear una nueva marca
    public function create()
    {
        return view('marcas.create');
    }

    // Guardar una nueva marca
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Marca::create($request->all());

        return redirect()->route('marcas.index')
                         ->with('success', 'Marca creada exitosamente.');
    }

    // Mostrar una marca específica
    public function show(Marca $marca)
    {
        return view('marcas.show', compact('marca'));
    }

    // Mostrar formulario para editar una marca
    public function edit(Marca $marca)
    {
        return view('marcas.edit', compact('marca'));
    }

    // Actualizar una marca existente
    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $marca->update($request->all());

        return redirect()->route('marcas.index')
                         ->with('success', 'Marca actualizada exitosamente.');
    }

    // Eliminar una marca
    public function destroy(Marca $marca)
    {
        $marca->delete();

        return redirect()->route('marcas.index')
                         ->with('success', 'Marca eliminada exitosamente.');
    }
}
