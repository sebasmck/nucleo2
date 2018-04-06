<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Historial as Historial;
use App\Seleccion;

class RankingController extends BaseController
{
    function index() {

    	$selecciones = Seleccion::all();
    	return  response()->json( $selecciones ,200 );
    }
}
