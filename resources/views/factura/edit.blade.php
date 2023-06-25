

<div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <form action="{{ route('factura.update',['factura'=> $factura->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="tipo_persona_id" class="form-label">tipo_persona_id</label>
          <input type="text" class="form-control" id="tipo_persona" name="tipo_persona_id" value="{{ $proyecto->nombre }}">
        </div>
        <div class="mb-3">
          <label for="Persona_id" class="form-label">Persona_id</label>
          <textarea class="form-control" name="descripcion" id="persona_id" cols="30" rows="10">{{ $proyecto->descripcion }}</textarea>
          <input type="hidden" value="{{ Auth::user()->id }}" name="persona_id">
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Persona_name</label>
          <input type="text" class="form-control" id="Persona_name" name="Persona_name" value="{{ $proyecto->nombre }}">
        </div>
        <div class="mb-3">
          <label for="cedula" class="form-label">Persona_cedula</label>
          <input type="text" class="form-control" id="Persona_cedula" name="Persona_cedula" value="{{ $proyecto->nombre }}">
        </div>
        <div class="mb-3">
          <label for="Ventas" class="form-label">Ventas_id</label>
          <input type="text" class="form-control" id="Ventas_id" name="Ventas_id" value="{{ $proyecto->nombre }}">
        </div>
        <div class="mb-3">
          <label for="Ventas_numero" class="form-label">Ventas_numero_de_ventas</label>
          <input type="text" class="form-control" id="Ventas_numero_de_ventas" name="Ventas_numero_de_ventas" value="{{ $proyecto->nombre }}">
        </div>
        <div class="mb-3">
          <label for="precio" class="form-label">Ventas_precio</label>
          <input type="text" class="form-control" id="Ventas_precio" name="Ventas_precio" value="{{ $proyecto->nombre }}">
        </div>
        <div class="mb-3">
          <label for="Producto_nombre" class="form-label">Producto_nombre_del_producto</label>
          <input type="text" class="form-control" id="Producto_nombre_del_producto" name="Producto_nombre_del_producto" value="{{ $proyecto->nombre }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </form>
    </div>
</div>
  