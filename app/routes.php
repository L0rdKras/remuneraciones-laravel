<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/empresa', function()
{
	return View::make('hello');
});*/
//home
Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);
//ver trabajadores de la empresa
Route::get('/trabajadores/{slug}/{id}',['as' => 'empresas', 'uses' => 'TrabajadoresController@empresas']);
//ver detalle del trabajador
Route::get('/{slug}/{id}',['as' => 'trabajadores', 'uses' => 'TrabajadoresController@show']);


//registro de trabajadores
Route::get('/trabajadores/registro/{slug}/{id}',['as' => 'registro_trabajador', 'uses' => 'TrabajadoresController@registro']);

Route::post('/trabajadores/registro/{slug}/{id}',['as' => 'guardar_trabajador', 'uses' => 'TrabajadoresController@guardar']);

//ver listado empresas

Route::get('/empresas',['as'=> 'lista_empresas', 'uses' => 'EmpresasController@listado']);