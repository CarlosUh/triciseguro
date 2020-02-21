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
<<<<<<< HEAD

Route::resource('documentos', 'DocumentosController');
Route::resource('persona', 'PersonaController');
=======
Route::resource('queja', 'QuejaController');
Route::resource('viajes', 'ViajesController');
Route::resource('licencia', 'LicenciaController');
>>>>>>> 77b20fa2d8f9d8f07e0baf92f6b82391e3d4a65a
>>>>>>> 2b2b250e2e3bb05ef354942efabb3d7cdb7770e9
