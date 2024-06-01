<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    // Mostrar lista de servicios
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    // Mostrar formulario para crear un nuevo servicio
    public function create()
    {
        return view('servicios.create');
    }

    // Guardar un nuevo servicio
    public function store(Request $request)
    {
        $request->validate([
            'fecha_recepcion' => 'required|date',
            'problema' => 'required',
            'estado' => 'required',
            'idTecnico' => 'required|exists:tecnicos,id',
            'idEquipo' => 'required|exists:equipos,id',
        ]);

        Servicio::create($request->all());

        return redirect()->route('servicios.index')
                         ->with('success', 'Servicio creado exitosamente.');
    }

    // Mostrar un servicio específico
    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    // Mostrar formulario para editar un servicio
    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    // Actualizar un servicio existente
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'fecha_recepcion' => 'required|date',
            'problema' => 'required',
            'estado' => 'required',
            'idTecnico' => 'required|exists:tecnicos,id',
            'idEquipo' => 'required|exists:equipos,id',
        ]);

        $servicio->update($request->all());

        return redirect()->route('servicios.index')
                         ->with('success', 'Servicio actualizado exitosamente.');
    }

    // Eliminar un servicio
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios.index')
                         ->with('success', 'Servicio eliminado exitosamente.');
    }
}
