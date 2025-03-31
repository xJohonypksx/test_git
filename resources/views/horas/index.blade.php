@extends("layouts.app")

@section("content")
    <div class="row justify-content-center my-5">
        <div class="col-md-7 text-center">
            <h1 class="alert alert-primary fw-bold">HORAS</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="h5 mb-0">Listado de Horas</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Descripción</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($horas as $hora)
                            <tr>
                                <td>{{$Loop->index+1}}</td>
                                <td>{{$hora->descripcion_h}}</td>
                            </tr>

                        @endforeach
                        <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>Descripción Hora</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Actualizado recientemente</small>
                </div>
            </div>
        </div>
    </div>
@endsection
