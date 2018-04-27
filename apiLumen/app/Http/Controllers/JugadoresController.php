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

    function update(Request $request, $Id_Jugador)
    {
        $jugador = Jugador::find($Id_Jugador)->update($request->all());

        return response()->json($jugador, 200);
    }


    function delete(Request $request, $Id_Jugador)
    {
        $jugador = Jugador::find($Id_Jugador);

        $jugador->delete();

        return response()->json($jugador, 200);
    }


}





