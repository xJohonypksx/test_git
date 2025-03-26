@extends("layouts.app")
@section("content")

    <h1>Ciudades</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id ciudad</th>
            <th scope="col">Nombre</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>Nombre Queretaro</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>2</td>
            <td>Nombre CDMX</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>3</td>
            <td>Nombre Guanajuato</td>
        </tr>
        </tbody>
    </table>

@endsection
