@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-film me-2"></i>Editar Película
                    </h5>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('peliculas.update', $pelicula->id_pelicula) }}" class="g-3">
                        @csrf
                        @method("PUT")

                        <!-- Campo Título -->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="titulo" class="form-label fw-medium">
                                    <i class="fas fa-heading me-1"></i>Título de la Película
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-warning text-white">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                    <input type="text"
                                           class="form-control @error('titulo') is-invalid @enderror"
                                           name="titulo"
                                           id="titulo"
                                           placeholder="Ej: El Padrino"
                                           value="{{ old('titulo', $pelicula->titulo) }}">
                                    @error('titulo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Campo Clasificación -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="id_clasificacion" class="form-label fw-medium">
                                    <i class="fas fa-certificate me-1"></i>Clasificación
                                </label>
                                <select class="form-select @error('id_clasificacion') is-invalid @enderror"
                                        name="id_clasificacion"
                                        id="id_clasificacion">
                                    @foreach($clasificaciones as $clasificacion)
                                        <option value="{{ $clasificacion->id_clasificacion }}"
                                            {{ $pelicula->id_clasificacion == $clasificacion->id_clasificacion ? 'selected' : '' }}>
                                            {{ $clasificacion->nombre_clasifi }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_clasificacion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Campo Género -->
                            <div class="col-md-6">
                                <label for="id_genero" class="form-label fw-medium">
                                    <i class="fas fa-theater-masks me-1"></i>Género
                                </label>
                                <select class="form-select @error('id_genero') is-invalid @enderror"
                                        name="id_genero"
                                        id="id_genero">
                                    @foreach($generos as $genero)
                                        <option value="{{ $genero->id_genero }}"
                                            {{ $pelicula->id_genero == $genero->id_genero ? 'selected' : '' }}>
                                            {{ $genero->desc_genero }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_genero')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo Idioma y Director -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="id_idioma" class="form-label fw-medium">
                                    <i class="fas fa-language me-1"></i>Idioma
                                </label>
                                <select class="form-select @error('id_idioma') is-invalid @enderror"
                                        name="id_idioma"
                                        id="id_idioma">
                                    @foreach($idiomas as $idioma)
                                        <option value="{{ $idioma->id_idioma }}"
                                            {{ $pelicula->id_idioma == $idioma->id_idioma ? 'selected' : '' }}>
                                            {{ $idioma->desc_idioma }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_idioma')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="id_director" class="form-label fw-medium">
                                    <i class="fas fa-user-tie me-1"></i>Director
                                </label>
                                <select class="form-select @error('id_director') is-invalid @enderror"
                                        name="id_director"
                                        id="id_director">
                                    @foreach($directores as $director)
                                        <option value="{{ $director->id_director }}"
                                            {{ $pelicula->id_director == $director->id_director ? 'selected' : '' }}>
                                            {{ $director->persona->nom }} {{ $director->persona->ap }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_director')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="row mt-4">
                            <div class="col-md-12 d-flex justify-content-end gap-2">
                                <a href="{{ route('peliculas.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-times-circle me-1"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-white">
                                    <i class="fas fa-save me-1"></i>Actualizar Película
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
