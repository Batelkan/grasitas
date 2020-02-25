<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grasita's Place</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/principal/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('public/principal/css/business-frontpage.css')}}" rel="stylesheet">
  @yield('estilos')
</head>

<body>
  @include('menusup')
  
  

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          @yield('titulo1')
          @yield('descrip1')
         
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      @yield('contenido1')
    </div>
    <!-- /.row -->

    @yield('cuerpo')
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('public/principal/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/principal/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
