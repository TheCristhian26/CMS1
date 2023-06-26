@extends('layouts.base')
@section('titulo','Eliminar ')
@section("botonera")
<a href="{{ route('factura.index') }}" class="btn btn-success">Regresar </a>
@endsection

@section('contenido')

<div class="text-center">
    <h3 class="text-center text-danger">
        ¿Está seguro de eliminar el proyecto?
    </h3>
    <form action="{{ route('factura.destroy',['facturas' => $facturas->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
    </form>
</div>

@endsection