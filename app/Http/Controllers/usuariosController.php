<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuariosModel;

class usuariosController extends Controller
{
    public function usuariosLista(request $r){
    	$usuarios = usuariosModel::all();
    	return view ('about')->with([
    		'nombre'=> $usuarios,
    		'created_at' => 'Hola Mundo'
    	]);
    }
}
