<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use App\Jugador;
use DB;


class JugadoresController extends Controller
{
    public function showJugador($Id_Jugador)
    {
        $jugador = DB::callencrypt("CALL buscarJugadorById($Id_Jugador)");

        return response()->json( $jugador[0] ,200 );
    }


    public function showJugadoresMundial($Id_Seleccion)
    {
        $jugadores = DB::callencrypt("CALL mostrarJugadoresMBySeleccion($Id_Seleccion)");

        return  response()->json( $jugadores ,200 );
    }

    function update(Request $request, $Id_Jugador)
    {

            $nombre = $request->input('Nombre_Jugador');
            $puntaje = $request->input('PuntajeGeneral_Jugador');
            $foto = $request->input('Foto_Jugador');
            $convocado = $request->input('ConvocadoMundial_Jugador');

        $jugador = DB::callencrypt("CALL actualizarJugador($Id_Jugador,'$nombre',$puntaje,'$foto',$convocado)");

        return response()->json($jugador, 200);
    }


    function delete(Request $request, $Id_Jugador)
    {
        $jugador = DB::callencrypt("CALL eliminar_jugador($Id_Jugador)");

        return response()->json($jugador, 200);
    }


}





