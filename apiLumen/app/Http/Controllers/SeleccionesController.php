<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Seleccion;


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
}
