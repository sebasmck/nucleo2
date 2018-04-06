<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Seleccion;
use Illuminate\Http\Request;
use App\Jugador;


class SeleccionesController extends Controller
{
    function index() {
    	$selecciones = Seleccion::all();
    	return  response()->json($selecciones ,200);
    }

    function showJugadores($Id_Seleccion){

        $jugadores = Seleccion::find($Id_Seleccion)->jugadores;
        
    	return response()->json($jugadores, 200);
    }

    function showHistorial($Id_Seleccion){
        $historial = Seleccion::find($Id_Seleccion)->historial;
        
    	return response()->json($historial, 200);
    }

    function createSeleccion(Request $request){
        
        $seleccion = Seleccion::create($request->all());
    	return response()->json($seleccion, 200);
    
    }

    function createJugador(Request $request){
        
        $seleccion = Jugador::create($request->all());
    	return response()->json($seleccion, 200);
    
    }



}
