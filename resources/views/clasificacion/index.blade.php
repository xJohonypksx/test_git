@extends("layouts.app")
@section("content")
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clasificaciones</title>
    <style>
        .row {
            display: flex;
            justify-content: space-between;
        }
        .row > .col {
            border: 1px solid #dee2e6;
            padding: 8px;
        }
        .row.header > .col {
            font-weight: bold;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="alert alert-primary text-center">Clasificaciones</h1>

    <div class="row header">
        <div class="col">ID</div>
        <div class="col">Nombre clasificacion</div>
    </div>

    @foreach($clasificaciones as $clasificacion)
    <div class="row">
        <div class="col">{{ $clasificacion->id }}</div>
        <div class="col">{{$clasificacion->nom_clasificacion}}</div>
    </div>
    @endforeach


</div>
</body>
</html>
@endsection
