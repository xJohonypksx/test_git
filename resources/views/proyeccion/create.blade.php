@extends("layouts.app")

@section("content")
    <h1>Crear Nueva Proyección</h1>

    <form action="{{ route('proyecciones.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="desc_proy" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="desc_proy" name="desc_proy" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Crear Proyección</button>
    </form>

    <a href="{{ route('proyecciones.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
@endsection
