<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Seleccion;


class SeleccionesController extends Controller
{
    function index() {

    	$selecciones = Seleccion::all();
    	return  response()->json( $selecciones ,200 );
    }
}
