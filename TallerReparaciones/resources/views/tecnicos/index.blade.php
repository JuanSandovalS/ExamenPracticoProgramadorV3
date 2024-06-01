@extends('layouts.app')

@section('content')
    <h1>Lista de Técnicos</h1>
    <a href="{{ route('tecnicos.create') }}" class="btn btn-primary mb-3">Crear nuevo técnico</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnicos as $tecnico)
                <tr>
                    <td>{{ $tecnico->nombre }}</td>
                    <td>{{ $tecnico->email }}</td>
                    <td>
                        <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display:inline-block;">
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
