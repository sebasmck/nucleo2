<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/historial', ['uses' => 'RankingController@index']);

$router->get('/selecciones', ['uses' => 'SeleccionesController@index']);

$router->get('/jugadores/{Id_Seleccion}', ['uses' => 'JugadoresController@show']);

