@extends("layouts.app")
@section("content")
    <form class="row g-3" method="post" action="{{route("ciudades.store")}}">
        @csrf

        <div class="col-auto">
            <label for="nombre" class="">Agrega la Ciudad</label>
            <input type="text" class="form-control-plaintext" name="nombre" id="nombre" >
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
        </div>
    </form>

@endsection
