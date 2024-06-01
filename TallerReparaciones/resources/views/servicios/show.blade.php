@extends('layouts.app')

@section('content')
    <h1>Detalles del Servicio</h1>

    <table class="table">
        <tr>
            <th>Fecha de Recepción:</th>
            <td>{{ $servicio->fecha_recepcion }}</td>
        </tr>
        <tr>
            <th>Problema:</th>
            <td>{{ $servicio->problema }}</td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td>{{ $servicio->estado }}</td>
        </tr>
        <tr>
            <th>Técnico:</th>
            <td>{{ $servicio->idTecnico }}</td>
        </tr>
        <tr>
            <th>Equipo:</th>
            <td>{{ $servicio->idEquipo }}</td>
        </tr>
    </table>

    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Volver</a>
@endsection
