@extends('layouts.app')

@section('content')
    <div class="container py-5" style="background: linear-gradient(135deg, #2a2a72, #009ffd);">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-light">
                <i class="bi bi-calendar-check-fill me-2"></i> <strong>Gestión de Días 📅</strong>
            </h2>
            <a href="{{ route('dias.create') }}" class="btn btn-gradient btn-lg">
                <i class="bi bi-plus-circle me-2"></i> Nuevo Día ➕
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-3 bg-dark text-light">
            <div class="card-body">
                @if ($dias->count())
                    <div class="table-responsive">
                        <table class="table table-dark table-hover table-bordered align-middle text-center">
                            <thead>
                            <tr>
                                <th>#️⃣</th>
                                <th>Descripción del Día 📝</th>
                                <th>Acciones ⚙️</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($dias as $dia)
                                <tr>
                                    <td>{{ $dia->id_dia }}</td>
                                    <td>{{ $dia->desc_dia }}</td> <!-- ESTA LÍNEA ES LA CLAVE -->
                                    <td>
                                        <a href="{{ route('dias.edit', $dia->id_dia) }}" class="btn btn-info">Editar</a>
                                        <form action="{{ route('dias.destroy', $dia->id_dia) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-center rounded-3">
                        <i class="bi bi-info-circle-fill me-2"></i> No hay días registrados 🛑
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
