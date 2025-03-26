@extends("layouts.app")
@section("content")

<h1 class="alert alert-info">Dias</h1>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dias as $dia)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$dia->descripcion_dia}}</td>
        </tr>
    @endforeach

    </tbody>
</table>

@endsection
