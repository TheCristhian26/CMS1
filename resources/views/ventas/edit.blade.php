@extends('layouts.base')
@section('titulo',"Editar venta")
@section("botonera")
<a href="{{ route('RouteVenta.index') }}" class="btn btn-success">Regresar a factura</a>
@endsection

@section('contenido')

<form action="{{ route('RouteVenta.update',['RouteVentum'=>$ventas->id]) }}" method="POST">
    @csrf
    @method('put')
    <div class="d-flex justify-content-center">
        <input type="file" class="form-control" id="input_imagen"  style="display:none">
        <textarea name="imagen" id="imagen_texto" class="d-none">{{ $ventas->imagen }}</textarea>
        <div style="border: solid 1px black">
            @if($ventas->imagen != null)
            <img src="{{ $ventas->imagen }}" alt="" id="imagen" width="150px" height="150px">
            @else
            <img src="{{ asset('img/default.png') }}" alt="" id="imagen" width="150px" height="150px">
            @endif
        </div>
    </div>
    <div class="mb-3">
        <label for="nombre_del_producto" class="form-label">Nombre del producto </label>
        <input type="text" class="form-control" id="nombre_del_producto" name="nombre_del_producto" value="{{ $ventas->nombre_del_producto }}">
    </div>
    <div class="mb-3">
        <label for="cantidad_de_fruto" class="form-label">cantidad de fruto </label>
        <textarea class="form-control" name="cantidad_de_fruto" id="cantidad_de_fruto" cols="30" rows="10">{{ $ventas->cantidad_de_fruto }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@endsection

@section('scripts')
<script>
    var imagen = document.getElementById('imagen');
    var input_imagen = document.getElementById('input_imagen');
    var imagen_texto = document.getElementById('imagen_texto');
    imagen.addEventListener('click',function(){
        input_imagen.click();
    });
    input_imagen.addEventListener('change',function(){
        var file = this.files[0];
        var sizebyte = this.files[0].size;
        var sizekilobyte = parseInt(sizebyte / 1024);
        if (sizekilobyte > 4096) {
            alert('La imagen excede el tamaño permitido de 4 MB');
        } else {
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById("imagen").src = reader.result;
                document.getElementById("imagen_texto").value = reader.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection