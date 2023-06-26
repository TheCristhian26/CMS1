@extends('layouts.base')
@section('titulo',"Editar una factura")
@section("botonera")
<a href="{{ route('factura.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('factura.update',['factura'=>$facturas->id]) }}" method="POST">
    @csrf
    @method('put')
    </div>
    <div class="mb-3">
        <label for="id" class="form-label">id</label>
        <input type="text" class="form-control" id="id" name="id" value="{{ $facturas->id }}">
    </div>
    <div class="mb-3">
        <label for="tipo_persona_id" class="form-label">tipo de persona</label>
        <input type="text" class="form-control" id="tipo_persona_id" name="tipo_persona_id" value="{{ $facturas->tipo_persona_id }}">
    </div>
    <div class="mb-3">
        <label for="Persona_id " class="form-label">Persona</label>
        <input type="text" class="form-control" id="Persona_id " name="Persona_id " value="{{ $facturas->Persona_id  }}">
    </div>
    <div class="mb-3">
        <label for="Persona_name" class="form-label">nombre</label>
        <input type="text" class="form-control" id="Persona_name" name="Persona_name" value="{{ $facturas->Persona_name }}">
    </div>
    <div class="mb-3">
        <label for="Persona_cedula" class="form-label">Cc</label>
        <input type="text" class="form-control" id="Persona_cedula" name="Persona_cedula" value="{{ $facturas->Persona_cedula }}">
    </div>
    <div class="mb-3">
        <label for="ventas_id" class="form-label">ventas del id</label>
        <input type="text" class="form-control" id="ventas_id" name="ventas_id" value="{{ $facturas->ventas_id }}">
    </div>
    <div class="mb-3">
        <label for="Ventas_numero_de_ventas" class="form-label">numero de ventas</label>
        <input type="text" class="form-control" id="Ventas_numero_de_ventas" name="Ventas_numero_de_ventas" value="{{ $facturas->Ventas_numero_de_ventas }}">
    </div>
    <div class="mb-3">
        <label for="Ventas_precio" class="form-label">precio</label>
        <input type="text" class="form-control" id="Ventas_precio" name="Ventas_precio" value="{{ $facturas->Ventas_precio }}">
    </div>
    <div class="mb-3">
        <label for="Producto_nombre_de_producto" class="form-label">nombre del producto</label>
        <input type="text" class="form-control" id="Producto_nombre_de_producto" name="Producto_nombre_de_producto" value="{{ $facturas->Producto_nombre_de_producto }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@endsection

@section('scripts')
@endsection