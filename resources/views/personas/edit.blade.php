@extends('layouts.base')
@section('titulo',"Editar una nueva persona")
@section("botonera")
<a href="{{ route('personas.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('personas.update',['persona'=>$persona->id]) }}" method="POST">
    @csrf
    @method('put')
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $persona->name }}">
    </div>
    <div class="mb-3">
        <label for="cedula" class="form-label">cedula</label>
        <textarea class="form-control" name="cedula" id="cedula" cols="30" rows="10">{{ $persona->cedula }}</textarea>
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@endsection

@section('scripts')
@endsection