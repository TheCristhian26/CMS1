@extends('layouts.base')
@section('titulo',"Crear una venta")
@section("botonera")
<a href="{{ route('RouteVenta.index') }}" class="btn btn-success">Regresar</a>
@endsection

@section('contenido')

<form action="{{ route('RouteVenta.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        
        <label for="persona_id" class="form-label">Persona</label>
        <select name="persona_id" id="persona_id">
            @foreach($personas as $persona)
            <option value="{{ $persona->id }}">{{ $persona->name }},{{$persona->apellido}},{{ $persona->tipo_persona }}</option>
            @endforeach
        </select>
    </div>

    <div class="d-flex justify-content-center">
        <input type="file" class="form-control" id="input_imagen"  style="display:none">
        <textarea name="imagen" id="imagen_texto" class="d-none"></textarea>
        <div style="border: solid 1px black">
            <img src="{{ asset('img/default.png') }}" alt="" id="imagen" name="imagen"     width="150px" height="150px">
        </div>
    </div>

    <div class="mb-3">
        <label for="cantidad_de_fruto" class="form-label">Cantidad de klg</label>
        <input type="text" class="form-control" id="cantidad_de_fruto" name="cantidad_de_fruto">
    </div>

    <div class="mb-3">
        <label for="tipo_persona" class="form-label">Nombre del fruto</label>
        <select type="text" class="form-select" aria-label="Default select example" id="tipo_persona" name="tipo_persona">
         <option value="Llene su campo"></option>
         <option value="Anoli">Anoli</option>
         <option value="Bruto">Bruto</option>
         <option value="Hibrito">Hibrido</option>
       </select>
    </div>

    <div class="mb-3">
        <label for="precio" css="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio">
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


