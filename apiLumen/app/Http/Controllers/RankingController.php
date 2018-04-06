<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Historial as Historial;
use App\Seleccion;

class RankingController extends BaseController
{
    function showHistorial(){
        $historial = Seleccion::find($Id_Seleccion)->historial;
        
    	return response()->json($historial, 200);
    }
}
