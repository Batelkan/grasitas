<?php

namespace App\Http\Controllers;

use App\AlimentosModel;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
	/* *********************
	   **   los tipos son **
	   *********************
	 tipo 0 son platillo
	 tipo 1 son bebidas
	 tipo 2 son postres 
	 */
	

    public function platillos(request $r){
    	$alimentos = AlimentosModel::where('tipo',0)->get();
    	return view ('platillos')->with([
    		'alimentos'=> $alimentos
    	]);
	}
	
	public function bebidas(request $r){
    	$bebidas = AlimentosModel::where('tipo',1)->get();
    	return view ('bebidas')->with([
    		'bebidas'=> $bebidas
    	]);
	}
	
	public function postres(request $r){
    	$postres = AlimentosModel::where('tipo',2)->get();
    	return view ('postres')->with([
    		'postres'=> $postres
    	]);
	}
	
	public function nuevo(request $r){
		$context = $r -> all();
		$alerta = 3;
		//echo "<script>console.log(".$context['base64img'].")</script>";
		if(isset($context['descrip'])){
		 try {
			
			$time = date("His");//obtiene el tiempo en fomrato HHmmss
			$extension = pathinfo($context['imagen'], PATHINFO_EXTENSION);
			$filename  = pathinfo($context['imagen'], PATHINFO_FILENAME);
			
			$data= $context['base64img'];
			list($type,$data) = explode(';',$data);
			list(,$data)= explode(',',$data);
			$data = base64_decode($data);
			$nombreArchivo= $filename.$time.'.'.$extension;
			file_put_contents("public/imagenes/".$nombreArchivo,$data);

			$alimentos = new AlimentosModel;
			$alimentos -> nombre=$context['nombre'];
			$alimentos -> descripcion=$context['descrip'];
			$alimentos -> precio=$context['precio'];
			$alimentos -> tipo=$context['tipo'];
			$alimentos -> imagen=$nombreArchivo;
			$alimentos -> save();
			$alerta = 1;

		 } catch (\Throwable $th) {
			$alerta = 0;
		 }
           
		}

		return view('agregarAlimento')-> with([
			'alerta' => $alerta
		]);
	}

	public function lista(request $r){
		$context = $r->all();
		$alerta = 3;
		if(isset($context['id'])){
			if($context['opr']==1)
			{
				try {
				$time = date("His");//obtiene el tiempo en fomrato HHmmss
				$extension = pathinfo($context['imagen'], PATHINFO_EXTENSION);
				$filename  = pathinfo($context['imagen'], PATHINFO_FILENAME);
				
				$data= $context['base64img'];
				list($type,$data) = explode(';',$data);
				list(,$data)= explode(',',$data);
				$data = base64_decode($data);
				$nombreArchivo= $filename.$time.'.'.$extension;
				file_put_contents("public/imagenes/".$nombreArchivo,$data);

				$alimento = AlimentosModel::find($context['id']);
				$alimento -> nombre=$context['nombre'];
				$alimento -> descripcion=$context['descrip'];
				$alimento -> precio=$context['precio'];
				$alimento -> tipo=$context['tipo'];
				$alimento -> imagen=$nombreArchivo;
				$alimento -> save();
				$alerta = 1;
				} catch (\Throwable $th) {
					$alerta = 0;
				}
			}    
			if($context['opr']==2) 
			{
			   try {
				$alimento = AlimentosModel::find($context['id']);
				$alimento -> delete();
				$alerta = 1;
			   } catch (\Throwable $th) {
				$alerta = 0;
			   }
			} 

		}

		$alimentos = AlimentosModel::orderBy('tipo','asc')
		->orderBY('nombre','asc')
		->get();
		return view('alimentosLista')-> with([
			'alerta' => $alerta,
			'alimentos'=>$alimentos
		]);
	}

     public function edita(request $r)
	{
		$context = $r -> all();
		$alimento=AlimentosModel::find($context['alimento']);
		return view('alimentosEdita')-> with([
			'alimento'=>$alimento
		]);
	}

	public function elimina(request $r)
	{
		$context = $r -> all();
		$alimento=AlimentosModel::find($context['alimento']);
		return view('alimentosEliminar')-> with([
			'alimento'=>$alimento
		]);
	}

}
