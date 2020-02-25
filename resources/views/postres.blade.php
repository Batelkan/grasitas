@extends('principal')
@section('titulo1')
	<h1 class="display-4 text-white mt-5 mb-2">Postres</h1>
@endsection

@section('descrip1')
<p class="lead mb-5 text-white-50">Postres naturales y regionales</p>
@endsection


@section('cuerpo')
	<div class="row">
		@if($postres)
		 @foreach ($postres as $pastelillos)
		 <div class="col-md-4 mb-5">
			<div class="card h-100 shadow"> 				
				<img class="card-img-top" src="{{asset('public/imagenes/'.$pastelillos->imagen)}}" alt="">
				<div class="card-body">
					<h4 class="card-title">
						{{$pastelillos-> nombre}}
					</h4>
					<p class="card-text">
						{{$pastelillos->descripcion}}
					</p>
				</div>
				<div class="card-footer">
					<small class="text-muted"><h4>Precio: {{$pastelillos->precio}}</h4></small>
				  </div>
			</div>
		</div>
		 @endforeach
		@endif
    </div>
@endsection
@section('scripts')
<script>
	$( window ).on( "load", function(){
	   $(".active").removeClass("active");
	   $("#postresM").addClass("active");
	})
</script>
@endsection