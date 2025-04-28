@extends("layouts.app")
@section("content")
    <form class="row g-3" method="post" action="{{route("horas.update",$hora->id_hora)}}">
        @csrf
        @method("PUT")
        <div class="col-auto">
            <label for="" class="">Descripcion de la Hora</label>
            <input type="text" class="form-control-plaintext" name="descripcion_h" id="descripcion_h" value="{{$hora->descripcion_h}}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
        </div>
    </form>

@endsection

