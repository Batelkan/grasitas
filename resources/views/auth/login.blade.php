
   @section('estilos')
   <link href="{{asset('public/login/login.css')}}" rel="stylesheet">  
   @endsection
   @extends('principal')
       
   @section('cuerpo')
   @if($errors->any())
   <div class="row collapse">
       <ul class="alert-box warning radius">
           @foreach($errors->all() as $error)
               <li> {{ $error }} </li>
           @endforeach
       </ul>
   </div>
   @endif
   <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="POST" action="login">
                @csrf
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="correo electronico" required>
                <label for="email">Correo Electronico</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="contraseña" required>
                <label for="password">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   @endsection
   