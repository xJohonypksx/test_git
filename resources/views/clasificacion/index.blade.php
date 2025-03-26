@extends("layouts.app")
@section("content")
    <h1 class="alert alert-primary">Clasificaciones</h1>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
        <title>Clasificaciones</title>

    </head>
    <body>
        <div class="container mt-5">
            <h3>Clasificaciones</h3>
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id_clasificacion</th>
                        <th>nom_clasificacion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>B</td>
                    </tr>
                </tbody>
            </table>
         </div>
    </body>
    </html>
@endsection
