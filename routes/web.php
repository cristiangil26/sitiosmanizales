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
*/

Route::get('/', function () {
    return view('probando');
});
Route::get('ruta', function () {
    return view('probando');
});
Route::group(['prefix'=>'admin'],function(){
    Route::resource('sitio','SitioController');
    Route::get('sitio/{}/destroy',['uses'=>'SitioController@destroy']);
});
Route::group(['prefix'=>'admin'],function(){
    Route::resource('mapa','MapaController');
    Route::get('mapa/{}/destroy',['uses'=>'MapaController@destroy']);
});
Route::group(['prefix'=>'admin'],function(){
    Route::resource('user','UsersController');
    Route::get('user/{}/destroy',['uses'=>'UsersController@destroy']);
});
Route::group(['prefix'=>'admin'],function(){
    Route::resource('comentario','ComentarioController');
    Route::get('comentario/{}/destroy',['uses'=>'ComentarioController@destroy']);
});
Route::get('sitio', function () {
    return view('Sitio/crearComentario');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
