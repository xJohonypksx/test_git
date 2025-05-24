@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Persona</h2>
        <form method="POST" action="{{ route('personas.update', $persona->id_persona) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre</label>
                <input type="text" name="nom" class="form-control" value="{{ $persona->nom }}" required>
            </div>
            <div class="mb-3">
                <label for="ap" class="form-label">Apellido Paterno</label>
                <input type="text" name="ap" class="form-control" value="{{ $persona->ap }}" required>
            </div>
            <div class="mb-3">
                <label for="am" class="form-label">Apellido Materno</label>
                <input type="text" name="am" class="form-control" value="{{ $persona->am }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
