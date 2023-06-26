@extends('layouts.base')
@section('titulo', 'Detalle de proyecto')
@section("botonera")
<a href="{{ route('factura.index') }}" class="btn btn-success">Regresar</a>
@endsection
@section('contenido')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <h2 class="text-center text-primary mb-3">Persona</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td width="10%">ID</td>
                        <td width="10%" >tipo de persona </td>
                        <td width="10%">id</td>
                        <td width="10%">Nombre</td>
                        <td width="10%">Cc</td>
                        <td width="10%">Ventas del id</td>
                        <td width="10%">Numero de ventas</td>
                        <td width="10%">Precio</td>
                        <td width="10%">Nombre del producto </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facturas as $factura)
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection