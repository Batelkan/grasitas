@extends('principal')
@section('titulo1')
<h1 class="display-4 text-white mt-5 mb-2">Platillos tipicos</h1>	
@endsection

@section('descrip1')
	<p class="lead mb-5 text-white-50">Vaporcitos, Panuchos, Salbutes</p>
@endsection


@section('cuerpo')
	<div class="row">
		@if($alimentos)
		 @foreach ($alimentos as $platillo)
		 <div class="col-md-4 mb-5">
			<div class="card h-100 shadow"> 				
				<img class="card-img-top" src="{{asset('public/imagenes/'.$platillo->imagen)}}" alt="">
				<div class="card-body">
					<h4 class="card-title">
						{{$platillo-> nombre}}
					</h4>
					<p class="card-text">
						{{$platillo->descripcion}}
					</p>
				</div>
				<div class="card-footer">
					<small class="text-muted"><h4>Precio: {{$platillo->precio}}</h4></small>
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
	   $("#platillosM").addClass("active");
	})
</script>
@endsection


