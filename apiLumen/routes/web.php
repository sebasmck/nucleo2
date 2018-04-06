<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/historial', ['uses' => 'RankingController@index']);

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']);

$router->get('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@showJugadores']);

$router->get('/selecciones/{Id_Seleccion}/historial', ['uses' => 'SeleccionesController@showHistorial']);

<<<<<<< HEAD
<<<<<<< HEAD
$router->get('/partidos', ['uses' => 'PartidosController@index']);

// create
=======
>>>>>>> parent of 1b50d70... Update


<<<<<<< HEAD
$router->post('/createJugador', ['uses' => 'SeleccionesController@createJugador']);

$router->post('/createPartido', ['uses' => 'PartidosController@createPartido']);
=======
>>>>>>> parent of 1b50d70... Update
=======


>>>>>>> parent of 1b50d70... Update
