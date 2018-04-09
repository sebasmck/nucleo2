<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

// selecciones

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']);

$router->post('/createSeleccion', ['uses' => 'SeleccionesController@createSeleccion']);

$router->put('/createSeleccion/{idseleccion}', ['uses' => 'SeleccionesController@update']);

$router->delete('selecciones/{idseleccion}', ['uses' => 'SeleccionesController@delete']);


// Jugadores

$router->get('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@showJugadores']);

$router->post('/createJugador', ['uses' => 'SeleccionesController@createJugador']);

$router->put('selecciones/{idjugador}', ['uses' => 'SeleccionesController@updateJugador']);

$router->delete('selecciones/{idjugador}', ['uses' => 'SeleccionesController@deleteJugador']);

// Partidos

$router->get('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@showJugadores']);

$router->post('/createPartido', ['uses' => 'SeleccionesController@createPartido']);








