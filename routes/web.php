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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/mesas', 'MesasController');

Route::resource('totales', 'TotalesController');

Route::resource('escuelas', 'EscuelasController');

//agregado
Route::get('candidatos/{id}', 'MesasController@getCandidatos');
Route::get('mesas2/{id}', 'MesasController@getMesas');

Route::get('ver-mesas', 'MesasController@verMesas')->name('ver-mesas');

// Route::get('proyectos/create', 'ProyectosController@create')->name('proyectos.create');



