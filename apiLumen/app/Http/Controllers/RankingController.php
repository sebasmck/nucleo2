<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Historial as Historial;

class RankingController extends BaseController
{
    function index() {

    	$history = Historial::all();
    	return  response()->json( $history ,200 );
    }
}
