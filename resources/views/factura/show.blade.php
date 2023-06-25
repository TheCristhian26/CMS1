@extends('layouts.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center text-primary mt-3 mb-3">
                {{ $factura->id }}
            </h1>
            <p class="mb-3">
                {{ $proyecto->tipo_persona_id }}
            </p>

            <p class="mb-3">
                {{ $proyecto->Persona_id }}
            </p>
            <p class="mb-3">
                {{ $proyecto->Persona_name }}
            </p>
            <p class="mb-3">
                {{ $proyecto->Persona_cedula }}
            </p>
            <p class="mb-3">
                {{ $proyecto->Ventas_id }}
            </p>
            <p class="mb-3">
                {{ $proyecto->Ventas_numero_de_ventas }}
            </p>
            <p class="mb-3">
                {{ $proyecto->Ventas_precio}}
            </p>
            <p class="mb-3">
                {{ $proyecto->Producto_nombre_del_product }}
            </p>

            <a href="{{ route('factura.index') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
@endsection