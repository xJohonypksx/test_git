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

    <div class="container">
        <h2>Editar Día 📝</h2>

        <form action="{{ route('dias.update', $dia->id_dia) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="desc_dia">Descripción del Día</label>
                <input type="text" name="desc_dia" class="form-control" value="{{ $dia->desc_dia }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('dias.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
