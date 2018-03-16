<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/selecciones', 'SeleccionesController@index')->name('selecciones');

Route::get('/selecciones/{Id_Seleccion}', 'SeleccionesController@show'));

// Route::Resource('jugadores', 'JugadoresController');
