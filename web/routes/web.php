<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/selecciones', 'SeleccionesController@index')->name('selecciones');

Route::get('/selecciones/{Id_Seleccion}/jugadores', 'SeleccionesController@show')->name('jugadores');

Route::get('/selecciones/{Id_Seleccion}/historial', 'SeleccionesController@showHistorial')->name('historial');

Route::get('/crearSelecciones', 'SeleccionesController@create')->name('crearSelecciones');

Route::get('/selecciones/{Id_Seleccion}/createJugador', 'JugadoresController@createJugador');

Route::post('/crearJugadorp', 'JugadoresController@store')->name('crearJugadorp');

Route::post('/crearSeleccion', 'SeleccionesController@store')->name('crearSeleccion');

