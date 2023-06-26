@extends('layouts.base')
@section('titulo',"Editar")
@section("botonera")
<a href="{{ route('ventas.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('ventas.update',['ventas'=>$ventas->id]) }}" method="POST">
    @csrf
    @method('put')
    </div>
    <div class="mb-3">
        <label for="persona_name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="persona_name" name="persona_name" value="{{ $ventas->persona_name }}">
    </div>
    <div class="mb-3">
        <label for="persona_cedula" class="form-label">cedula</label>
        <textarea class="form-control" name="persona_cedula" id="persona_cedula" cols="30" rows="10">{{ $ventas->persona_cedula }}</textarea>
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@endsection

@section('scripts')
@endsection