@extends('layouts.app')

@section('content')
    <h1>Editar Servicio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fecha_recepcion">Fecha de Recepción</label>
            <input type="date" name="fecha_recepcion" class="form-control" value="{{ old('fecha_recepcion', $servicio->fecha_recepcion) }}">
        </div>
        <div class="form-group">
            <label for="problema">Problema</label>
            <textarea name="problema" class="form-control">{{ old('problema', $servicio->problema) }}</textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ old('estado', $servicio->estado) }}">
        </div>
        <div class="form-group">
            <label for="idTecnico">Técnico</label>
            <input type="text" name="idTecnico" class="form-control" value="{{ old('idTecnico', $servicio->idTecnico) }}">
        </div>
        <div class="form-group">
            <label for="idEquipo">Equipo</label>
            <input type="text" name="idEquipo" class="form-control" value="{{ old('idEquipo', $servicio->idEquipo) }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
