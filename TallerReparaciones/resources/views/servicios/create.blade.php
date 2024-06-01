@extends('layouts.app')

@section('content')
    <h1>Crear Servicio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha_recepcion">Fecha de Recepción</label>
            <input type="date" name="fecha_recepcion" class="form-control" value="{{ old('fecha_recepcion') }}">
        </div>
        <div class="form-group">
            <label for="problema">Problema</label>
            <textarea name="problema" class="form-control">{{ old('problema') }}</textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ old('estado') }}">
        </div>
        <div class="form-group">
            <label for="idTecnico">Técnico</label>
            <input type="text" name="idTecnico" class="form-control" value="{{ old('idTecnico') }}">
        </div>
        <div class="form-group">
            <label for="idEquipo">Equipo</label>
            <input type="text" name="idEquipo" class="form-control" value="{{ old('idEquipo') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
