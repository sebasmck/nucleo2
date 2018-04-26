<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

use App\Jugador;


class JugadoresController extends Controller
{
    
    public function showJugadoresMundial($Id_Seleccion)
    {
        $jugadores = Jugador::where('Id_Seleccion',$Id_Seleccion)->where('convocadoMundial_jugador',1)->get();

        return  response()->json( $jugadores ,200 );
    }

}





