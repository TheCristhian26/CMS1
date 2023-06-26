@extends('layouts.base')
@section('titulo', 'ventas')
@section('botonera')
    <a href="{{ route('ventas.create') }}" class="btn btn-primary">Nuevo</a>
@endsection

@section('contenido')

    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>imagen</td>
                    <td>Nombre</td>
                    <td>Cc</td>
                    <td>Cantidad de kg</td>
                    <td> precio </td>
                    <td>tipo de persona</td>
                    <td>numero de ventas </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $ventass)
                    <tr>
                        <td>
                            {{ $ventas->id }}
                        </td>
                        <td>
                            {{ $ventas->imagen }}
                        </td>
                        <td>
                            {{ $ventas->persona_name }}
                        </td>
                        <td>
                            {{ $ventas->persona_cedula }}
                        </td>
                        <td>
                            {{ $ventas->cantidad_de_fruto }}
                        </td>
                        <td>
                            {{ $ventas->precio_de_fruto }}
                        </td>
                        <td>
                            {{ $ventas->tipo_persona  }}
                        </td>
                        <td>
                            {{ $ventas->Producto_nombre_del_producto }}
                        </td>
                        <td>
                            {{ $ventas->numero_de_ventas }}
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