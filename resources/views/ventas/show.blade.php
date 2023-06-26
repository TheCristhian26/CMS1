@extends('layouts.base')
@section('titulo', 'Detalle de proyecto')
@section("botonera")
<a href="{{ route('ventas.index') }}" class="btn btn-success">Regresar</a>
@endsection
@section('contenido')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <h2 class="text-center text-primary mb-3">FACTURA</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td width="10%">imagen</td>
                        <td width="45%">id</td>
                        <td width="45%">nombre</td>
                        <td width="45%">cc</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facturas as $facturass)
                        <tr>
                            <td>{{ $facturas->imagen }}</td>
                            <td>{{ $facturas->id }}</td>
                            <td>{{ $facturas->persona_name }}</td>
                            <td>{{ $facturas->persona_cedula }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection