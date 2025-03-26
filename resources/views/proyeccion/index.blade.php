@extends("layouts.app")
@section("content")

    <h1>proyecciones</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">proyeccion</th>
            <th scope="col">precio</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>2d</td>
            <td>70 pesos</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>3d</td>
            <td>110 pesos</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>imax</td>
            <td>140 pesos</td>
        </tr>
        </tbody>
    </table>

@endsection
