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
Lista Alimentos
@endsection
@section('areaAdminContenido')
@if(@isset($alerta) && $alerta!=3)
    @if($alerta === 1)
      <div class="alert alert-success" role="alert">
        Alimento Actualizado con exito
      </div>
      @else
      <div class="alert alert-danger" role="alert">
         Se ha eliminado con exito
      </div>
    @endif
@endif
<div class="col-xl-9 col-lg-9 mx-auto">
    <div class="shadow">
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
@if (isset($alimentos))
    @foreach($alimentos as $al)
    <tr>
        <th scope="row">{{{$al->id}}}</th>
        <td>{{$al->nombre}}</td>
        <td>{{number_format($al->precio)}}</td>
        <td>{{$al->descripcion}}</td>
        <td>img</td>
        <td>
            @switch($al->tipo)
                @case(1)
                     Bebidas
                    @break
                @case(2)
                    Postres
                    @break
                @default
                    Alimentos
            @endswitch
        </td>
        <td>
            <form name="edit{{$al->id}}" method="POST" action="a_edit">
                @csrf
                <input type="id" name="alimento" value="{{$al->id}}" hidden>
                <button class="btn btn-warning" type="submit">Editar</button>
            </form>
        </td>
        <td>
            <form name="delet{{$al->id}}" method="POST" action="a_elm">
                @csrf
                <input type="id" name="alimento" value="{{$al->id}}" hidden>
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
      </tr>
    @endforeach
@else
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
@endif
             
            </tbody>
          </table>
          
    </div>
</div>

@endsection


@section('scrip')
  <script>
 
  </script>
@endsection