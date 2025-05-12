@extends("layouts.app")

@section("content")
    <style>
        body {
            background-color: #0f0f0f;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .center-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            background: linear-gradient(145deg, #1a1a1a, #121212);
        }

        .form-box {
            background-color: #1e1e2f;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
            width: 100%;
            max-width: 500px;
            border: 1px solid #00ffff40;
        }

        .form-title {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff80;
        }

        .form-label {
            color: #ccc;
        }

        .form-control {
            background-color: #2a2a3d;
            border: 1px solid #00ffff80;
            color: #fff;
            box-shadow: inset 0 0 5px #00ffff30;
        }

        .form-control:focus {
            background-color: #2a2a3d;
            border-color: #00ffff;
            box-shadow: 0 0 8px #00ffff80;
            color: #fff;
        }

        .btn-tech {
            background-color: #00ffff;
            color: #000;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 0 10px #00ffff80;
        }

        .btn-tech:hover {
            background-color: #00cccc;
            box-shadow: 0 0 20px #00ffffcc;
        }
    </style>

    <div class="center-form-container">
        <div class="form-box">
            <h2 class="form-title">Registrar Día</h2>
            <form class="row g-3" method="post" action="{{ route('dias.store') }}">
                @csrf

                <div class="col-12">
                    <label for="descripcion_dia" class="form-label">Descripción del Día</label>
                    <input type="text" class="form-control" name="descripcion_dia" id="descripcion_dia" placeholder="Ej. Lunes" required>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-tech mt-3 px-4 py-2">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
