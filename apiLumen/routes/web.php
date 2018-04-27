<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

// selecciones

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']); //READ TEAMS

$router->post('/createSeleccion', ['uses' => 'SeleccionesController@createSeleccion']); // CREATE TEAMS

$router->put('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@update']); //UPDATE TEAMS

$router->delete('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@delete']); //DELETE TEAMS


// Jugadores


$router->get('/selecciones/seleccionmundial/{Id_Seleccion}', ['uses' => 'JugadoresController@showJugadoresMundial']); // READ WORLD CUP PLAYERS

$router->get('/selecciones/{Id_Seleccion}/jugadores', ['uses' => 'SeleccionesController@showJugadores']); //READ PLAYERS

$router->post('/createJugador', ['uses' => 'SeleccionesController@createJugador']);  // CREATE PLAYERS

$router->put('/jugador/{Id_Jugador}', ['uses' => 'JugadoresController@updateJugador']); //UPDATE PLAYERS

$router->delete('/jugador/{Id_Jugador}', ['uses' => 'JugadoresController@deleteJugador']); //DELETE PLAYERS

// Partidos

$router->post('/createPartido', ['uses' => 'SeleccionesController@createPartido']); // CREATE MATCH

// Historial

$router->get('/historial/{Id_Seleccion}', ['uses' => 'RankingController@showHistorial']); // READ TEAM HISTORIAL


// Ranking

$router->get('/ranking', ['uses' => 'RankingController@showRanking']); // READ RANKING







