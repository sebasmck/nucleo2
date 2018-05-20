<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Seleccion;
use Illuminate\Http\Request;
use App\Jugador;
use DB;


class PartidosController extends Controller
{
    function index() {
    	$partidos =   DB::callencrypt('CALL verPartidos()');

    	return  response()->json($partidos ,200);
    }

    function getPartidoById( $Id_Partido ) {

        $partido = DB::callencrypt("CALL traer_partido_id($Id_Partido)");

        return response()->json($partido,200);

    }


    function createPartido(Request $request) {


         $validated_data = $this->validate($request,[
        'date' => 'required|date_format:"Y-m-d"',
        'equipo1' => 'required|string|max:50',
        'equipo2' => 'required|string|max:50',
        'score1' => 'required|integer',
        'score2' => 'required|integer'
    ]);

        $date = $request->input('date');
        $team1 = $request->input('equipo1');
        $team2 = $request->input('equipo2');
        $score1 = $request->input('score1');
        $score2 = $request->input('score2');

        if($validated_data != null)
        {
            $partido = $validated_data->errors();
        }

        if( $validated_data == null)
        {
            $partido = DB::callencrypt("CALL insertar_partido('".$date."','".$team1."','".$team2."',$score1,$score2)");
        }

        return response()->json($partido,200);

    }


    function update(Request $request, $Id_Seleccion)
    {
        $validated_data = $this->validate($request,[
        'date' => 'required|date_format:"Y-m-d"',
        'equipo1' => 'required|string|max:50',
        'equipo2' => 'required|string|max:50',
        'score1' => 'required|integer',
        'score2' => 'required|integer'
    ]);

        $id = $Id_Seleccion;
        $date = $request->input('date');
        $team1 = $request->input('equipo1');
        $team2 = $request->input('equipo2');
        $score1 = $request->input('score1');
        $score2 = $request->input('score2');

        if($validated_data != null)
        {
            $partido = $validated_data->errors();
        }

        if( $validated_data == null AND $id)
        {
            $partido = DB::callencrypt("CALL actualizar_partido($id,'".$date."','".$team1."','".$team2."',$score1,$score2)");
        }
        
        return response()->json($partido,200);
    }

 
    function delete(Request $request, $Id_Seleccion)
    {

        $partido = DB::callencrypt("CALL eliminar_partido($Id_Seleccion)");

        return response()->json($partido, 200);
    }



}
