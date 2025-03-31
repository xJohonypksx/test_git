@extends("layouts.app")
@section("content")
    <h1 class="alert alert-success text-center">Listado de Idiomas</h1>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Idiomas Disponibles</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Idioma</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($idiomas as $idioma)
                    <tr>

                        <td>{{$idioma->id_idioma}}</td>
                        <td>{{$idioma->desc_idioma}}</td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
