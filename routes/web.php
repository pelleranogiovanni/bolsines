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



// Route::get('proyectos/create', 'ProyectosController@create')->name('proyectos.create');



