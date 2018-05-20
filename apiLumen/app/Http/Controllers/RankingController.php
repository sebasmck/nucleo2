<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Historial as Historial;
use App\Seleccion;
use DB;

class RankingController extends BaseController
{
    function showHistorial($Id_Seleccion){
        $historial = DB::callencrypt("CALL verHistorial($Id_Seleccion)");
        
    	return response()->json($historial[0], 200);
    }

    function showRanking(){

    	$historial = DB::callencrypt("CALL verRanking()"); 

    	return response()->json($historial, 200);
    }
}
