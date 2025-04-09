@extends("layouts.app")

@section("content")
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header bg-primary text-white text-center fw-bold">
                        Agregar Ciudad
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ciudades.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre de la Ciudad</label>
                                <input
                                    type="text"
                                    class="form-control @error('nombre') is-invalid @enderror"
                                    name="nombre"
                                    id="nombre"
                                    placeholder="Ej. Ciudad de México"
                                >
                                @error('nombre')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
