@extends("layouts.app")

@section("content")
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header bg-primary text-white text-center fw-bold">
                        Agregar Idioma
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('idiomas.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="desc_idioma" class="form-label">Nuevo Idioma</label>
                                <input
                                    type="text"
                                    class="form-control @error('desc_idioma') is-invalid @enderror"
                                    name="desc_idioma"
                                    id="desc_idioma"
                                    placeholder="Ej. Español"
                                >
                                @error('desc_idioma')
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
