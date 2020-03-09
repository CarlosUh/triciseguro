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




Route::resource('documentos', 'DocumentosController');
Route::resource('persona', 'PersonaController');
Route::resource('queja', 'QuejaController');

Route::resource('licencia', 'LicenciaController');

Route::resource('solicitud', 'SolicitudController');

Route::resource('contactos', 'ContactosController');

Route::resource('notificacion', 'NotificacionController');


Route::resource('viajes', 'ViajesController');


Route::resource('servicios', 'ServiciosController');

Route::resource('promocion', 'PromocionController');
