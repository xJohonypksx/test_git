@extends("layouts.app")

@section("content")
    <style>
        .center-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            background-color: #f8f9fa;
        }

        .form-box {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-title {
            font-weight: bold;
            margin-bottom: 1.5rem;
            text-align: center;
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
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
