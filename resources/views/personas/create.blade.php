@extends('layouts.base')
@section('titulo',"Crear persona")
@section("botonera")
<a href="{{ route('personas.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('personas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="cedula" class="form-label">cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula">
    </div>

    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
    </div>

    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection
