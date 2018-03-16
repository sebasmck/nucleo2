<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

use App\Seleccion;


class JugadoresController extends Controller
{
    
    public function show($Id_Seleccion)
    {
        $jugadores = Seleccion::find($Id_Seleccion)->jugadores;

        return  response()->json( $jugadores ,200 );
    }

}





