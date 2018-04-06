<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use App\Partido;


class PartidosController extends Controller
{
    
    public function index()
    {
        $partidos = Partido::all();

        return  response()->json( $partidos ,200);
    }


    function createPartido(Request $request){
        
        $partido = Partido::create($request->all());
    	return response()->json($partido, 200);
    
    }

}

