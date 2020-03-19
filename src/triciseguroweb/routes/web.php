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






Route::resource('contactos', 'ContactosController');
<<<<<<< .mine

=======

>>>>>>> .theirs
Route::resource('notificacion', 'NotificacionController');
Route::resource('taxista', 'TaxistaController');
<<<<<<< .mine

=======

>>>>>>> .theirs
Route::resource('credencial', 'CredencialController');
<<<<<<< .mine

 
=======


>>>>>>> .theirs
