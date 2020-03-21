<?php
  

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarea', 'TareaController');

Route::resource('queja', 'QuejaController');

Route::resource('licencia', 'LicenciaController');
Route::resource('calificaciones', 'CalificacionesController');