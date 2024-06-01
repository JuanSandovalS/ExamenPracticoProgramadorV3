<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    // Mostrar lista de equipos
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    // Mostrar formulario para crear un nuevo equipo
    public function create()
    {
        return view('equipos.create');
    }

    // Guardar un nuevo equipo
    public function store(Request $request)
    {
        $request->validate([
            'tipoEquipo' => 'required|string|max:255',
            'idMarca' => 'required|integer|exists:marcas,id',
            'idCliente' => 'required|integer|exists:clientes,id',
            'modelo' => 'required|string|max:255',
            'numeroSerie' => 'required|string|max:255',
        ]);

        Equipo::create($request->all());

        return redirect()->route('equipos.index')
                         ->with('success', 'Equipo creado exitosamente.');
    }

    // Mostrar un equipo específico
    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    // Mostrar formulario para editar un equipo
    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    // Actualizar un equipo existente
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'tipoEquipo' => 'required|string|max:255',
            'idMarca' => 'required|integer|exists:marcas,id',
            'idCliente' => 'required|integer|exists:clientes,id',
            'modelo' => 'required|string|max:255',
            'numeroSerie' => 'required|string|max:255',
        ]);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')
                         ->with('success', 'Equipo actualizado exitosamente.');
    }

    // Eliminar un equipo
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')
                         ->with('success', 'Equipo eliminado exitosamente.');
    }
}
