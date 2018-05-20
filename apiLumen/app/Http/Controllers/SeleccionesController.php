<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Seleccion;
use Illuminate\Http\Request;
use App\Jugador;
use DB;


class SeleccionesController extends Controller
{
    function index() {
    	$selecciones = DB::callencrypt("CALL consultarSelecciones()");
    	return  response()->json($selecciones ,200);
    }

    function showSeleccionById($Id_Seleccion)
    {
        $seleccion = DB::callencrypt("CALL buscarSeleccionById($Id_Seleccion)");

        return response()->json($seleccion[0] ,200);
    }

    function showJugadores($Id_Seleccion){

        $jugadores = DB::callencrypt("CALL buscarJugadoresBySeleccion($Id_Seleccion)");

        
    	return response()->json($jugadores, 200);
    }

    function showHistorial($Id_Seleccion){
         $historial = DB::callencrypt("CALL verHistorial($Id_Seleccion)");
        
    	return response()->json($historial, 200);
    }

    function createSeleccion(Request $request){
        
        $nombre = $request->input('Nombre_Seleccion');
        $imagen = $request->input('Imagen_Seleccion');
        $puntos = $request->input('Puntos_Seleccion');

        $seleccion = DB::callencrypt("CALL insertar_seleccion('$nombre','$imagen',$puntos)");

    	return response()->json($seleccion, 200);
    
    }

    function showNombresSelecciones(){

        $selecciones =  DB::callencrypt("CALL verNombresSelecciones()");
        return response()->json($selecciones,200);

    }

    function createJugador(Request $request){
        
        $seleccion = $request->input('Id_Seleccion');
        $nombre = $request->input('Nombre_Jugador');
        $puntaje = $request->input('PuntajeGeneral_Jugador');
        $foto = $request->input('Foto_Jugador');
        $convocado = $request->input('ConvocadoMundial_Jugador');

        $seleccion = DB::callencrypt("CALL insertar_jugador_api($seleccion,'$nombre',$puntaje,'$foto',$convocado)");
    	return response()->json($seleccion, 200);
    
    }


    function update(Request $request, $Id_Seleccion)
    {
        $nombre = $request->input('Nombre_Seleccion');
        $imagen = $request->input('Imagen_Seleccion');
        $puntos = $request->input('Puntos_Seleccion');

        $seleccion = DB::callencrypt("CALL actualizar_seleccion($Id_Seleccion,'$nombre','$imagen',$puntos)");

        return response()->json($seleccion, 200);
    }


    function delete(Request $request, $Id_Seleccion)
    {
        $seleccion = DB::callencrypt("CALL eliminar_seleccion($Id_Seleccion)");
        return response()->json($seleccion, 200);
    }



}
