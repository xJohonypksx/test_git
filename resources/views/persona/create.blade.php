@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Registrar Persona</h2>
        <form method="POST" action="{{ route('personas.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="ap" class="form-label">Apellido Paterno</label>
                <input type="text" name="ap" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="am" class="form-label">Apellido Materno</label>
                <input type="text" name="am" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
