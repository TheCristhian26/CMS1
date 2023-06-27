@extends('layouts.base')
@section('titulo',"Crear una venta")
@section("botonera")
<a href="{{ route('ventas.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('ventas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="persona_name" class="form-label">Persona</label>
        <select name="Persona_id" id="">
            @foreach($personas as $persona)
            <option value="{{ $persona->id }}">{{ $persona->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="persona_name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="persona_name" name="persona_name">
    </div>

    <div class="mb-3">
        <label for="persona_cedula" class="form-label">cedula</label>
        <input type="text" class="form-control" id="persona_cedula" name="persona_cedula">
    </div>

    <div class="mb-3">
        <label for="Producto_nombre_del_producto" class="form-label">nombre del producto </label>
        <input type="text" class="form-control" id="Producto_nombre_del_producto" name="Producto_nombre_del_producto">
    </div>

    <div class="mb-3">
        <label for="cantidad_de_fruto" class="form-label">Cantidad de klg</label>
        <input type="text" class="form-control" id="cantidad_de_fruto" name="cantidad_de_fruto">
    </div>

    <div class="mb-3">
        <label for="precio_de_fruto" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio_de_fruto" name="precio_de_fruto">
    </div>

    <div class="mb-3">
        <label for="tipo_persona_id" class="form-label">Tipo persona</label>
        <input type="text" class="form-control" id="tipo_persona_id" name="tipo_persona_id">
    </div>
    <div class="d-flex justify-content-center">
        <input type="file" class="form-control" id="input_imagen"  style="display:none">
        <textarea name="imagen" id="imagen_texto" class="d-none"></textarea>
        <div style="border: solid 1px black">
            <img src="{{ asset('img/default.png') }}" alt="" id="imagen"  width="150px" height="150px">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
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


