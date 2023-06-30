@extends('layouts.base')
@section('titulo','Eliminar ')
@section("botonera")
<a href="{{ route('personas.index') }}" class="btn btn-success">Regresar </a>
@endsection

@section('contenido')

<div class="text-center">
    <h3 class="text-center text-danger">
        ¿Está seguro de eliminar la persona?
    </h3>
    <form action="{{ route('personas.delete',['persona' => $persona->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
    </form>
</div>

@endsection