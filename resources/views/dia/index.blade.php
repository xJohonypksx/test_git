@extends("layouts.app")
@section("content")

<h1 class="alert alert-info">Dias
<a href="{{url("dias/create")}}" class="btn btn-success text-aling-center ">Agregar</a>
</h1>
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
            <td>
                <form action="{{route("dia.destroy",$dias->id_dia)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a class="btn btn-primary" href="{{route("dia.edit",$dias->id_dia)}}">Editar</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

@endsection
