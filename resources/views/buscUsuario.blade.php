@extends('adminMain')
@section('tituloAdmin')
Buscar Usuario           

@endsection
@section('areaAdminContenido')
<div class="col-xl-8 col-lg-7 mx-auto">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Buscar Usuario</h6>
        
      </div>
      <div class="mx-auto">
        <!-- Dropdown - Messages -->
        <div class=" p-3 w-100" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar Usuario..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
  </div>
      <!-- Card Body -->
      <div class="card-body">
          <form>
              <div class="form-group">
                  <label for="">Usuario</label>
                  <input readonly  value="Jesus86" type="text" class="form-control" id="usrNombre" aria-describedby="nombre" placeholder="Ingresa tu nombre">
               </div>
               <div class="form-group">
                  <label for="">Contraseña</label>
                  <input readonly  value="micontraseña" type="password" class="form-control" id="usrContraseña" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="">Tipo de usuario</label>
                  <select readonly  class="form-control" id="usrTipo">
                    <option>Estandar</option>
                    <option selected>Administrador</option>
                  </select>
                </div>
               
              <div class="form-group">
                  <label for="">Nombre completo</label>
                  <input readonly   value="Jesus Javier Frias osorio" type="text" class="form-control" id="usrNombre" aria-describedby="nombre" placeholder="Ingresa tu nombre">
               </div>
               <div class="form-group">
                  <label for="">Telefono</label>
                  <input value="9999 545667" type="text" class="form-control" id="usrNombre" aria-describedby="nombre" placeholder="Ingresa el numero telefonico">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Correo</label>
                  <input readonly  value="jfrias@hotmail.com" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                  <small id="emailHelp" class="form-text text-muted">Nunca lo compartiremos con nadie.</small>
                </div>
              <button onclick="window.open('modUsuario');" type="submit" class="btn btn-primary">Modificar</button>
              <button onclick="window.open('elemiUsuario');" type="submit" class="btn btn-danger">Eliminar</button>
            </form>
      </div>
    </div>
  </div>
@endsection