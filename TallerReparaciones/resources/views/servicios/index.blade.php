@extends('layouts.app')

@section('content')
    <h1>Lista de Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-primary mb-3">Crear nuevo servicio</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Fecha de Recepción</th>
                <th>Problema</th>
                <th>Estado</th>
                <th>Técnico</th>
                <th>Equipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->fecha_recepcion }}</td>
                    <td>{{ $servicio->problema }}</td>
                    <td>{{ $servicio->estado }}</td>
                    <td>{{ $servicio->idTecnico }}</td>
                    <td>{{ $servicio->idEquipo }}</td>
                    <td>
                        <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
