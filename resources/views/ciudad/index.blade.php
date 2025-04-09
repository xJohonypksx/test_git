@extends("layouts.app")

@section("content")
    <h1 class="alert alert-info">Ciudades
        <a href="{{url("ciudades/create")}}" class="btn btn-success text-aling-center ">Agregar</a>
    </h1>
    <div class="row justify-content-center vh-100 align-items-center bg-light">
        <div class="col-md-8">

            <div class="card shadow-lg">

                <div class="card-header bg-primary text-white text-center">
                    <h1 class="mb-0">Ciudad</h1>
                </div>

                <div class="card-body">

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

                <div class="card-footer bg-secondary text-white text-center">
                    <small>Listado de Ciudades - Laravel</small>
                </div>
            </div>
        </div>
    </div>
@endsection


