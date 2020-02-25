@extends('principal')
@section('titulo1')
	<h1 class="display-4 text-white mt-5 mb-2">Bebidas</h1>
@endsection

@section('descrip1')
<p class="lead mb-5 text-white-50">Bebidas naturales y sodas</p>
@endsection


@section('cuerpo')
	<div class="row">
		@if($bebidas)
		 @foreach ($bebidas as $liquido)
		 <div class="col-md-4 mb-5">
			<div class="card shadow h-100"> 				
				<img class="card-img-top" src="{{asset('public/imagenes/'.$liquido->imagen)}}" alt="">
				<div class="card-body">
					<h4 class="card-title">
						{{$liquido-> nombre}}
					</h4>
					<p class="card-text">
						{{$liquido->descripcion}}
					</p>
				</div>
				<div class="card-footer">
					<small class="text-muted"><h4>Precio: {{$liquido->precio}}</h4></small>
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
	   $("#bebidasM").addClass("active");
	})
</script>
@endsection