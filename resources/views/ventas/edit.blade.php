@extends('layouts.base')
@section('titulo',"Editar")
@section("botonera")
<a href="{{ route('RouteVenta.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('RouteVenta.update',['RouteVentum'=>$ventas->id]) }}" method="POST">
    @csrf
    @method('put')
    </div>
    <div class="mb-3">
        <label for="nombre_del_producto" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_del_producto" name="nombre_del_producto" value="{{ $ventas->nombre_del_producto }}">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <textarea class="form-control" name="imagen" id="imagen" cols="30" rows="10">{{ $ventas->imagen }}</textarea>
        <input type="hidden" value="{{ Auth::user()->id }}" name="input_imagen">
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
        var sizekilobyte = parseInt(sizebyte / 1080);
        if (sizekilobyte < 4) {
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