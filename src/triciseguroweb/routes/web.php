<?php
  

Route::get('/', function () {
    return view('welcome');
});



Route::resource('documentos', 'DocumentosController');
Route::resource('persona', 'PersonaController');
Route::resource('queja', 'QuejaController');
Route::resource('licencia', 'LicenciaController');
Route::resource('contactos', 'ContactosController');
Route::resource('notificacion', 'NotificacionController');
Route::resource('calificaciones', 'CalificacionesController');