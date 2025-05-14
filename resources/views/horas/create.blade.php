@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-plus-circle me-2"></i>Registrar Nueva Hora
                    </h5>
                </div>

                <div class="card-body">
                    <form method="post" action="{{route('horas.store')}}" class="g-3">
                        @csrf

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="descripcion_h" class="form-label fw-medium">
                                    <i class="fas fa-clock me-1"></i>Descripción de la Hora
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-white">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                    <input type="text"
                                           class="form-control @error('descripcion_h') is-invalid @enderror"
                                           name="descripcion_h"
                                           id="descripcion_h"
                                           placeholder="Ej: 08:00 - 09:00 AM"
                                           value="{{ old('descripcion_h') }}">
                                    @error('descripcion_h')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-text mt-1">
                                    <i class="fas fa-info-circle me-1"></i>Formato sugerido: Hora inicial - Hora final
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12 d-flex justify-content-end gap-2">
                                <a href="{{ route('horas.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-times-circle me-1"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-1"></i>Guardar Hora
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-light">
                    <small class="text-muted">
                        <i class="fas fa-exclamation-triangle me-1"></i>
                        Todos los campos son requeridos
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection
