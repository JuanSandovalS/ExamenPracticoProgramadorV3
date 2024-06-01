@extends('layouts.app')
@section('content')
    <h1>Editar Equipo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipoEquipo">Tipo de Equipo</label>
            <input type="text" name="tipoEquipo" class="form-control" value="{{ old('tipoEquipo', $equipo->tipoEquipo) }}">
        </div>
        <div class="form-group">
            <label for="idMarca">ID de la Marca</label>
            <input type="text" name="idMarca" class="form-control" value="{{ old('idMarca', $equipo->idMarca) }}">
        </div>
        <div class="form-group">
            <label for="idCliente">ID del Cliente</label>
            <input type="text" name="idCliente" class="form-control" value="{{ old('idCliente', $equipo->idCliente) }}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" class="form-control" value="{{ old('modelo', $equipo->modelo) }}">
        </div>
        <div class="form-group">
            <label for="numeroSerie">Número de Serie</label>
            <input type="text" name="numeroSerie" class="form-control" value="{{ old('numeroSerie', $equipo->numeroSerie) }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
