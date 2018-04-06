<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

// get 

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']);

$router->get('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@showJugadores']);

$router->get('/selecciones/{Id_Seleccion}/historial', ['uses' => 'SeleccionesController@showHistorial']);

// create

$router->post('/createSeleccion', ['uses' => 'SeleccionesController@createSeleccion']);

$router->post('/createJugador', ['uses' => 'SeleccionesController@createJugador']);
