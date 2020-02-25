<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('about', function(){
    return view('about');
});
*/

Route::get('/', 'AlimentosController@platillos');
Route::get('admin', function(){
    return view('adminMain');
});
Route::get('crearUsuario', function(){
    return view('crearUsuario');
});
Route::get('modUsuario', function(){
    return view('modUsuario');
});
Route::get('buscUsuario', function(){
    return view('buscUsuario');
});
Route::get('elemiUsuario', function(){
    return view('elemiUsuario');
});
Route::get('platillos', 'AlimentosController@platillos');
Route::get('bebidas', 'AlimentosController@bebidas');
Route::get('postres', 'AlimentosController@postres');
Route::get('about', 'usuariosController@usuariosLista');

Route::get('nuevoAlimento', function(){
    return view('agregarAlimento');
});

Route::post('crearalimento','AlimentosController@nuevo');
Route::any('a_list','AlimentosController@lista');
Route::post('a_edit','AlimentosController@edita');
Route::post('a_elm','AlimentosController@elimina');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('register','Auth\RegisterController@register')->name('register');
Route::get('logout','Auth\LoginController@logout')->name('logout');