@extends('layouts.base')
@section('titulo', 'persona')
@section('botonera')
    <a href="{{ route('personas.create') }}" class="btn btn-primary">Nuevo</a>
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
                            {{ $personas->password }}
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