@extends('layouts.app')

@section('content')
    <h1>Detalles del Técnico</h1>

    <table class="table">
        <tr>
            <th>Nombre:</th>
            <td>{{ $tecnico->nombre }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $tecnico->email }}</td>
        </tr>
    </table>

    <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
