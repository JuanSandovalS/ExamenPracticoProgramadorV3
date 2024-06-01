@extends('layouts.app')
@section('content')
    <h1>Detalles del Cliente</h1>
    <div class="card">
        <div class="card-header">
            Cliente: {{ $cliente->nombre }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $cliente->id }}</p>
            <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
            <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
            <p><strong>Email:</strong> {{ $cliente->email }}</p>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection
