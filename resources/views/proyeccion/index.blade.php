@extends("layouts.app")

@section("content")
    <h1>Proyecciones</h1>

    <a href="{{ route('proyecciones.create') }}" class="btn btn-success mb-3">➕ Nueva Proyección</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($proyeciones as $proyeccion)
            <tr>
                <td>{{ $proyeccion->id_proyeccion }}</td>
                <td>{{ $proyeccion->desc_proy }}</td>
                <td>${{ $proyeccion->precio }}</td>
                <td>
                    <a href="{{ route('proyecciones.edit', $proyeccion->id_proyeccion) }}" class="btn btn-info btn-sm">✏️ Editar</a>
                    <form action="{{ route('proyecciones.destroy', $proyeccion->id_proyeccion) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta proyección?')">🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
