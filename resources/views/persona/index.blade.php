@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Personas</h2>
        <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Nueva Persona</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{ $persona->id_persona }}</td>
                    <td>{{ $persona->nom }} {{ $persona->ap }} {{ $persona->am }}</td>
                    <td>
                        <a href="{{ route('personas.edit', $persona->id_persona) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id_persona) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('¿Seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
