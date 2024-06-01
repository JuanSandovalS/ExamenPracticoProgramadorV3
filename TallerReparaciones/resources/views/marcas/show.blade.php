@extends('layouts.app')

@section('content')
    <h1>Detalles de la Marca</h1>

    <div class="card">
        <div class="card-header">
            Marca: {{ $marca->nombre }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $marca->id }}</p>
            <p><strong>Nombre:</strong> {{ $marca->nombre }}</p>
            <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection
