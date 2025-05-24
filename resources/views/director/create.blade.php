@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Registrar Director</h2>
        <form method="POST" action="{{ route('directores.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id_persona" class="form-label">Selecciona una Persona</label>
                <select name="id_persona" class="form-control" required>
                    <option value="">-- Selecciona --</option>
                    @foreach($personas as $persona)
                        <option value="{{ $persona->id_persona }}">{{ $persona->nombre }} {{ $persona->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
