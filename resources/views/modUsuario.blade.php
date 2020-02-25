@extends('adminMain')
@section('tituloAdmin')
Actualizar Usuario
@endsection
@section('areaAdminContenido')
<div class="col-xl-8 col-lg-7 mx-auto">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Actualizar Usuario</h6>
        
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <form>
              <div class="form-group">
                  <label for="">Usuario</label>
                  <input value="Jesus86" type="text" class="form-control" id="usrNombre" aria-describedby="nombre" placeholder="Ingresa tu nombre">
               </div>
               <div class="form-group">
                  <label for="">Contraseña</label>
                  <input value="micontraseña" type="password" class="form-control" id="usrContraseña" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="">Tipo de usuario</label>
                  <select class="form-control" id="usrTipo">
                    <option>Estandar</option>
                    <option selected>Administrador</option>
                  </select>
                </div>
               
              <div class="form-group">
                  <label for="">Nombre completo</label>
                  <input value="Jesus Javier Frias osorio" type="text" class="form-control" id="usrNombre" aria-describedby="nombre" placeholder="Ingresa tu nombre">
               </div>
               <div class="form-group">
                  <label for="">Telefono</label>
                  <input value="9999 545667" type="text" class="form-control" id="usrNombre" aria-describedby="nombre" placeholder="Ingresa el numero telefonico">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Correo</label>
                  <input value="jfrias@hotmail.com" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                  <small id="emailHelp" class="form-text text-muted">Nunca lo compartiremos con nadie.</small>
                </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
      </div>
    </div>
  </div>
@endsection