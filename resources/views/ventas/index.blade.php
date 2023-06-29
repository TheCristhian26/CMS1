@extends('layouts.base')
@section('titulo', 'ventas')
@section('botonera')
    
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary"><a href="{{ route('personas.create') }}" class="btn btn-primary">Crear Cliente</a></button>
        <button type="button" class="btn btn-primary"><a href="{{ route('RouteVenta.create') }}" class="btn btn-primary"> Crear Venta</a></button>
    </div>
@endsection

@section('contenido')

    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>imagen</td>
                    <td>Nombre del producto</td>
                    <td>Cantidad de Klg</td>
                    <td>Precio</td>
                    <td> tipo de persona  </td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $ventass)
                    <tr>
                        <td>
                            {{ $ventass->id }}
                        </td>
                        <td>
                            <img src="{{$ventass->imagen}}" alt="" width="100px" height="100px">
                        </td>
                        <td>
                            {{ $ventass->nombre_del_producto}}
                        </td>
                        <td>
                            {{ $ventass->cantidad_de_fruto }}
                        </td>
                        <td>
                            {{ $ventass->precio }}
                        </td>
                        <td>
                            {{ $ventass->persona_id }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('RouteVenta.show',['RouteVentum'=>$ventass->id]) }}" class="btn btn-success">Detalle</a>
                                <a href="{{ route('RouteVenta.edit',['RouteVentum'=>$ventass->id]) }}" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="{{ route('ventas.delete',['Ventas'=>$ventass->id]) }}" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection