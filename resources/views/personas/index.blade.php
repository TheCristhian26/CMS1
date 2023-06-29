@extends('layouts.base')
@section('titulo', 'persona')
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
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Cc</td>
                    <td>Direccion</td>
                    <td> tipo de persona  </td>
                    <td> Password </td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($persona as $personas)
                    <tr>
                        <td>
                            {{ $personas->id }}
                        </td>
                        <td>
                            {{ $personas->name }}
                        </td>
                        <td>
                            {{ $personas->apellido }}
                        </td>
                        <td>
                            {{ $personas->cedula }}
                        </td>
                        <td>
                            {{ $personas->direccion }}
                        </td>

                        <td>
                            {{ $personas->tipo_persona }}
                        </td>

                        <td>
                            {{ $personas->password }}
                        </td>
    
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('personas.show',['persona'=>$personas->id]) }}" class="btn btn-success">Detalle</a>
                                <a href="{{ route('personas.edit',['persona'=>$personas->id]) }}" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="{{ route('personas.delete',['persona'=>$personas->id]) }}" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection