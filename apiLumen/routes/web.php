<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

// selecciones

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']);

$router->post('/createSeleccion', ['uses' => 'SeleccionesController@createSeleccion']);

$router->put('/createSeleccion/{idseleccion}', ['uses' => 'SeleccionesController@update']);

$router->delete('/selecciones/delete/{idseleccion}', ['uses' => 'SeleccionesController@delete']);


// Jugadores

$router->get('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@showJugadores']);

$router->get('/selecciones/seleccionmundial/{Id_Seleccion}', ['uses' => 'JugadoresController@showJugadoresMundial']);

$router->post('/createJugador', ['uses' => 'SeleccionesController@createJugador']);

$router->put('/selecciones/{Id_Seleccion}/jugador/{idjugador}', ['uses' => 'SeleccionesController@updateJugador']);

$router->delete('/selecciones/{Id_Seleccion}/jugador/{idjugador}', ['uses' => 'SeleccionesController@deleteJugador']);

// Partidos

$router->post('/createPartido', ['uses' => 'SeleccionesController@createPartido']);

// Historial

$router->get('/historial/{Id_Seleccion}', ['uses' => 'RankingController@showHistorial']);


// Ranking

$router->get('/ranking', ['uses' => 'RankingController@showRanking']);







