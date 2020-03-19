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

Route::resource('tarea', 'TareaController');
Route::resource('comprobante_pago', 'comprobante_pagoController');
Route::resource('comprobante_pago', 'comprobante_pagoController');
Route::resource('tareas', 'tareasController');
Route::resource('taxista', 'TaxistaController');
Route::resource('taxista', 'TaxistaController');
