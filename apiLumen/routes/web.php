<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/historial', ['uses' => 'RankingController@index']);

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']);

$router->get('/selecciones/{Id_Seleccion}', ['uses' => 'SeleccionesController@showJugadores']);

