@extends('adminMain')
@section('estilo')

<style>
  .file {
  visibility: hidden;
  position: absolute;
  }
</style>
@endsection
@section('tituloAdmin')
Editar Alimento
@endsection
@section('areaAdminContenido')
<div class="col-xl-8 col-lg-7 mx-auto">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Crear Platillo</h6>
        
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <form id="newFood" method="POST" action="a_list">
          <input hidden value="{{$alimento->id}}" name="id">
          <input hidden value="1" name="opr">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="">Nombre</label>
              <input name="nombre" required value="{{$alimento->nombre}}" type="text" class="form-control" id="alNombre" aria-describedby="nombre" placeholder="Ingresa el nombre del platillo">
               </div>

               <div class="form-group">
                <label for="">Descripcion</label>
                <input name="descrip" required value="{{$alimento->descripcion}}" type="text" class="form-control" id="alDescripcion" aria-describedby="descripcion" placeholder="Ingresa la descipcion del platillo">
             </div>

             <div class="form-group">
                <label for="">Precio</label>
                <input name="precio" type="number" required value="{{$alimento->precio}}" type="text" class="form-control" id="alprecio" aria-describedby="precio" placeholder="Ingresa el precio del platillo">
             </div>

                <div class="form-group">
                  <label for="">Tipo de alimento</label>
                  <select name="tipo"  class="form-control" id="usrTipo">
                    <option value="0" @if($alimento->tipo ==0) select @endif>Platillo</option>
                    <option value="1" @if($alimento->tipo ==1) select @endif>Bebida</option>
                    <option value="2" @if($alimento->tipo ==2) select @endif>Postre</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Agregar Imagen</label>
                    <div class="ml-2 col-sm-6">
                        <div id="msg"></div>
                        <form id="formImg" method="post" id="image-form">
                            <input name="imagen" type="file" class="file" accept="image/*">
                            <input name="base64img" id="base64img"  hidden>
                            <div class="input-group my-3">
                            <input  type="text" class="form-control" value="{{$alimento->imagen}}" disabled placeholder="subir archivo" id="file">
                            <div class="input-group-append">
                                <button form="formImg" type="button" class="browse btn btn-primary">Buscar...</button>
                            </div>
                            </div>
                        </form>
                        </div>
                        <div class="ml-2 col-sm-6">
                        @if(@isset($alimento->imagen) && $alimento->imagen != null)
                          <img src="public/imagenes/{{$alimento->imagen}}"  id="preview" class="img-thumbnail">
                        @else
                          <img src="https://placehold.it/150x150" id="preview" class="img-thumbnail">
                        @endif
                        </div>
                </div>
              <button onclick="AlimentosFormSubmit()" class="btn btn-primary">Guardar</button>
            </form>
      </div>
    </div>
  </div>
@endsection


@section('scrip')
  <script>
     function AlimentosFormSubmit()
    {
       document.getElementById("newFood").submit();
    }

    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
        $("#base64img").val(e.target.result);
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });
  </script>
@endsection