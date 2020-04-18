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


Route::resource('persona', 'PersonaController');
Route::resource('ubicacion', 'UbicacionController');
Route::resource('taxista', 'TaxistaController');
Route::resource('pasajero', 'PasajeroController');
Route::resource('promocion', 'PromocionController');
Route::resource('ruta', 'RutaController');
Route::resource('solicitud', 'SolicitudController');
Route::resource('viaje', 'ViajeController');
Route::resource('servicio', 'ServicioController');