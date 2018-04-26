<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Historial as Historial;
use App\Seleccion;

class RankingController extends BaseController
{
    function showHistorial($Id_Seleccion){
        $historial = Seleccion::find($Id_Seleccion)->historial;
        
    	return response()->json($historial, 200);
    }

    function showRanking(){

    	$historial = Seleccion::orderBy('Puntos_Seleccion', 'desc')->where('ClasificacionMundial_Seleccion',1)->get();

    	return response()->json($historial, 200);
    }
}
