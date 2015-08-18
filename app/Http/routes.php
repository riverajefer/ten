<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('hola', function () {
    return view('hola');
});

Route::get('formulario', 'Formulario\FormularioController@show');
Route::post('formulario', 'Formulario\FormularioController@save');

Route::resource('sector',   'SectorController');
Route::resource('producto', 'ProductoController');
Route::resource('registro', 'RegistroController');
