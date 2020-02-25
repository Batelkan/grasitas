@extends('principal')
@section('titulo1')
	 Grasita's Place
@endsection

@section('descrip1')
	 Empresa dedicada a la venta de platillos tipicos
@endsection


@section('cuerpo')
	{{-- <div class="row">
		@if($alimentos)
		 @foreach ($alimentos as $platillo)
		 <div class="col-md-4 mb-5">
			<div class="card h-100"> 				
				<img class="card-img-top" src="{{asset('public/principal/imagenes/panucho.jpg')}}" alt="">
				<div class="card-body">
					<h4 class="card-title">
						{{$platillo-> nombre}}
					</h4>
					<p class="card-text">
						{{$platillo->descripcion}}
					</p>
				</div>
			</div>
		</div>
		 @endforeach
		@endif
		
	</div> --}}
@endsection


