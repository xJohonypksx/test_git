@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Listado de Directores</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('directores.create') }}" class="btn btn-primary mb-3">Agregar Director</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>ap</th>
                <th>am</th>
                <th>ID Persona</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($directores as $director)
                <tr>
                    <td>{{ $director->id_director }}</td>
                    <td>{{ $director->nom }}</td>
                       <td>{{ $director->ap }}</td>
                    <td>{{ $director->am }}</td>
                    <td>{{ $director->id_persona }}</td>
                    <td>
                        <a href="{{ route('directores.show', $director->id_director) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('directores.edit', $director->id_director) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('directores.destroy', $director->id_director) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar este director?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($directores->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">No hay directores registrados.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
