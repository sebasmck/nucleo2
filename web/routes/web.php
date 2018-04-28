<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/selecciones', 'SeleccionesController@index')->name('selecciones');

Route::get('/partidos', 'PartidosController@index')->name('partidos');

Route::get('/selecciones/{Id_Seleccion}/jugadores', 'SeleccionesController@show')->name('jugadores');

Route::get('/selecciones/{Id_Seleccion}/historial', 'SeleccionesController@showHistorial')->name('historial');

Route::get('/crearHistorial', 'SeleccionesController@crearHistorial')->name('crearHistorial');

Route::get('/crearSelecciones', 'SeleccionesController@create')->name('crearSelecciones');

Route::get('/crearPartido', 'PartidosController@create')->name('crearPartido');

Route::get('/selecciones/{Id_Seleccion}/createJugador', 'JugadoresController@createJugador');

Route::get('/modificarSeleccion/{Id_Seleccion}', 'SeleccionesController@prepareUpdate')->name('modiicarSeleccion');

Route::get('/modificarPartido/{Id_Partido}', 'PartidosController@edit')->name('modificarPartido');

Route::post('/modificarPartido/{Id_Partido}', 'PartidosController@update')->name('modificarPartidop');

Route::post('/crearJugadorp', 'JugadoresController@store')->name('crearJugadorp');

Route::post('/crearSeleccion', 'SeleccionesController@store')->name('crearSeleccion');

Route::post('/crearPartidop', 'PartidosController@store')->name('crearPartidop');

Route::post('/modificarSeleccion/{Id_Seleccion}', 'SeleccionesController@update')->name('modificarSeleccionp');

Route::get('/eliminarSeleccion/{Id_Seleccion}', 'SeleccionesController@destroy')->name('eliminarSeleccion');

Route::get('/eliminarPartido/{Id_Partido}', 'PartidosController@destroy')->name('eliminarPartido');