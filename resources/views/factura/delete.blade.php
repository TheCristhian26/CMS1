


<div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <h3 class="text-center">
        ¿Está seguro de eliminar la factura?
      </h3>
      <form action="{{ route('factura.destroy',['factura'=>$factura->id]) }}" method="POST">
        @method('delete')
        @csrf
        <div class="d-flex justify-content-center">
          <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar</a>
          <button type="submit" class="btn btn-danger" style="margin-left:10px">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
