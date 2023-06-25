@extends('layouts.base')
@section('titulo', 'facturas')
@section('botonera')
    <a href="#" class="btn btn-primary">Nuevo</a>
@endsection

@section('contenido')

    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                  <td>id</td>
                  <td>tipo de persona </td>
                  <td>id</td>
                  <td>Nombre</td>
                  <td>Cc</td>
                  <td>Ventas del id</td>
                  <td>Numero de ventas</td>
                  <td>Precio</td>
                  <td>Nombre del producto </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($facturas as $facturas)
                    <tr>
                        <td>
                            {{ $facturas->id }}
                        </td>
                        <td>
                            {{ $facturas->tipo_persona_id }}
                        </td>
                        <td>
                            {{ $facturas->Persona_id }}
                        </td>
                        <td>
                            {{ $facturas->Persona_name }}
                        </td>
                        <td>
                            {{ $facturas->Persona_cedula }}
                        </td>
                        <td>
                            {{ $facturas->Ventas_id }}
                        </td>
                        <td>
                          {{ $facturas->Ventas_numero_de_ventas }}
                        </td>
                        <td>
                          {{ $facturas->Ventas_precio }}
                        </td>
                        <td>
                          {{ $facturas->Producto_nombre_de_producto }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-success">Detalle</a>
                                <a href="#" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="#" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection