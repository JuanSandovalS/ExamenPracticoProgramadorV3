@extends('layouts.app')

@section('content')
    <h1>Detalles del Equipo</h1>

    <table class="table">
        <tr>
            <th>Tipo de Equipo:</th>
            <td>{{ $equipo->tipoEquipo }}</td>
        </tr>
        <tr>
            <th>ID de la Marca:</th>
            <td>{{ $equipo->idMarca }}</td>
        </tr>
        <tr>
            <th>ID del Cliente:</th>
            <td>{{ $equipo->idCliente }}</td>
        </tr>
        <tr>
            <th>Modelo:</th>
            <td>{{ $equipo->modelo }}</td>
        </tr>
        <tr>
            <th>Número de Serie:</th>
            <td>{{ $equipo->numeroSerie }}</td>
        </tr>
    </table>

    <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
