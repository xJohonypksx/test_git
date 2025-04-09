@extends("layouts.app")
@section("content")
    <form class="row g-3" method="post" action="{{route("dias.store")}}">
        @csrf

        <div class="col-auto">
            <label for="descripcion_dia" class="">Descripcion del Dia</label>
            <input type="text" class="form-control-plaintext" name="descripcion_dia" id="descripcion_dia" >
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
        </div>
    </form>

@endsection

