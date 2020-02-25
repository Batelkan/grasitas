@extends('adminMain')
@section('tituloAdmin')
Administrar Usuario
@endsection
@section('areaAdminContenido')
<div class="col-xl-8 col-lg-7 mx-auto">

    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Crear Usuario</h6>
        
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <form method="POST" action="{{route('register')}}">
            @csrf
              <div class="form-group">
                  <label for="">Usuario</label>
                  <input type="text" autocomplete="username" class="form-control" id="usuario" name="usuario" aria-describedby="nombre" placeholder="Usuario">
               </div>
               <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" autocomplete="new-password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                </div>
                <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" autocomplete="new-password" class="form-control" id="contraseña_confirmation" name="contraseña_confirmation" placeholder="Confirmar contraseña">
                </div>
                <div class="form-group">
                  <label for="">Tipo de usuario</label>
                  <select class="form-control" id="tipo" name="tipo">
                    <option>Estandar</option>
                    <option>Administrador</option>
                  </select>
                </div>
               
              <div class="form-group">
                  <label for="">Nombre completo</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="nombre completo">
               </div>
               <div class="form-group">
                  <label for="">Telefono</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefono" placeholder="numero telefonico">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="correo electronico">
                  <small id="emailHelp" class="form-text text-muted">Nunca lo compartiremos con nadie.</small>
                </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
      </div>
    </div>
  </div>
@endsection