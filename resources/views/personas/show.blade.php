@extends('layouts.base')
@section('titulo', 'Detalle de proyecto')
@section("botonera")
<a href="{{ route('personas.index') }}" class="btn btn-success">Regresar</a>
@endsection
@section('contenido')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <h2 class="text-center text-primary mb-3">Persona</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td width="10%">ID</td>
                        <td width="45%">cedula</td>
                        <td width="45%">direccion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persona as $personas)
                        <tr>
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->cedula }}</td>
                            <td>{{ $persona->direccion }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection