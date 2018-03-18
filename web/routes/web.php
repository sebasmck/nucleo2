<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/selecciones', 'SeleccionesController@index')->name('selecciones');

Route::get('/crearSelecciones', 'SeleccionesController@create')->name('crearSelecciones');

Route::get('/selecciones/{Id_Seleccion}/jugadores', 'SeleccionesController@show')->name('jugadores');

Route::get('/crearJugador', 'JugadoresController@create')->name('crearJugador');
