@extends("layouts.app")

@section("content")
    <div class="container py-4">
        <!-- Header con gradiente -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card bg-gradient-primary border-0 shadow-lg">
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="display-6 text-white mb-0">
                                <i class="fas fa-clock me-3"></i>Gestión de Horas
                            </h1>
                            <a href="{{ url('horas/create') }}" class="btn btn-light btn-lg rounded-pill px-4">
                                <i class="fas fa-plus me-2"></i>Nueva Hora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta de contenido -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow">
                    <!-- Header de la tabla -->
                    <div class="card-header bg-indigo text-white py-3">
                        <h3 class="mb-0">
                            <i class="fas fa-list-alt me-2"></i>Registros Existentes
                        </h3>
                    </div>

                    <!-- Cuerpo de la tabla -->
                    <div class="card-body p-0">
                        <div class="table-responsive rounded">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light-purple text-white">
                                <tr>
                                    <th class="ps-4 py-3 text-uppercase fw-semibold">#</th>
                                    <th class="py-3 text-uppercase fw-semibold">
                                        <i class="fas fa-comment-dots me-2"></i>Descripción
                                    </th>
                                    <th class="text-center py-3 text-uppercase fw-semibold">
                                        <i class="fas fa-tools me-2"></i>Acciones
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($horas as $hora)
                                    <tr class="border-bottom">
                                        <td class="ps-4 fw-bold text-primary">{{ $loop->iteration }}</td>
                                        <td>
                                                <span class="badge bg-soft-blue text-dark fs-6">
                                                    <i class="fas fa-clock me-2"></i>{{ $hora->descripcion_h }}
                                                </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('horas.edit', $hora->id_hora) }}"
                                                   class="btn btn-sm btn-outline-warning rounded-pill px-3"
                                                   title="Editar">
                                                    <i class="fas fa-pen-fancy me-1"></i> Editar
                                                </a>

                                                <form action="{{ route('horas.destroy', $hora->id_hora) }}"
                                                      method="POST"
                                                      class="d-inline">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit"
                                                            class="btn btn-sm btn-outline-danger rounded-pill px-3"
                                                            title="Eliminar"
                                                            onclick="return confirm('¿Estás seguro de eliminar esta hora?')">
                                                        <i class="fas fa-trash-alt me-1"></i> Eliminar
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4">
                                            <div class="bg-soft-pink p-4 rounded">
                                                <i class="fas fa-database fa-2x mb-3 text-muted"></i>
                                                <h5 class="text-muted">No se encontraron registros</h5>
                                                <a href="{{ url('horas/create') }}" class="btn btn-sm btn-indigo mt-2">
                                                    <i class="fas fa-plus me-1"></i> Crear primera hora
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Footer con estadísticas -->
                    <div class="card-footer bg-light">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-muted">
                                    <i class="fas fa-info-circle me-2 text-indigo"></i>
                                    Total registros: <strong class="text-primary">{{ $horas->count() }}</strong>
                                </span>
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="text-muted">
                                    <i class="fas fa-sync-alt me-2 text-indigo"></i>
                                    Actualizado: {{ now()->format('d/m/Y H:i') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos personalizados -->
    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }
        .bg-indigo {
            background-color: #5c6bc0 !important;
        }
        .bg-light-purple {
            background-color: #7986cb !important;
        }
        .bg-soft-blue {
            background-color: #e3f2fd !important;
        }
        .bg-soft-pink {
            background-color: #fce4ec !important;
        }
        .btn-indigo {
            background-color: #5c6bc0;
            color: white;
        }
        .btn-indigo:hover {
            background-color: #3f51b5;
            color: white;
        }
    </style>
@endsection
