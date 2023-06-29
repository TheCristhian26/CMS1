@extends('layouts.base')
@section('titulo', 'Factura')
@section("botonera")
<a href="{{ route('RouteVenta.index') }}" class="btn btn-success">Regresar</a>
@endsection
@section('contenido')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <h2 class="text-center text-primary mb-3">FACTURA</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>imagen</td>
                        <td>Cantidad de kg</td>
                        <td> precio </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $ventass) 
                        <tr>
                            <td>
                                {{ $ventas->id }}
                            </td>

                            <td>
                                 <img src="{{$ventas->imagen}}" alt="" width="100px" height="100px">
                            </td>

                            <td>
                                {{ $ventas->cantidad_de_fruto }}
                            </td>

                            <td>
                                {{ $ventas->precio }}
                            </td>

                            <td>
                                {{ $ventas->nombre_del_producto }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection