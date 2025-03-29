@extends("layouts.app")

@section("content")
    <div class="row justify-content-center vh-100 align-items-center bg-light">
        <div class="col-md-8">
            <!-- Tarjeta de contenedor -->
            <div class="card shadow-lg">
                <!-- Título destacado en la cabecera -->
                <div class="card-header bg-primary text-white text-center">
                    <h1 class="mb-0">Ciudad</h1>
                </div>
                <!-- Contenido de la tarjeta -->
                <div class="card-body">
                    <!-- Tabla estilizada -->
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Nombre Queretaro</td>
                        </tr>
                        @foreach($ciudades as $index => $ciudad)
                            <tr>
                                <th scope="row">{{ $index + 2 }}</th>
                                <td>{{ $ciudad->nombre }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pie de tarjeta -->
                <div class="card-footer bg-secondary text-white text-center">
                    <small>Listado de Ciudades - Laravel</small>
                </div>
            </div>
        </div>
    </div>
@endsection


