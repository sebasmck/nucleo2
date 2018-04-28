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
    	$partidos =   DB::select('SELECT A.Id_Partido "Id_Partido", (SELECT E.Fecha_Partido FROM partido E WHERE A.Id_Partido = E.Id_Partido) "Fecha_Partido", C.Nombre_Seleccion "Equipo_1", A.NumeroGoles_Rendimiento "Goles_1", D.Nombre_Seleccion "Equipo_2", B.NumeroGoles_Rendimiento "Goles_2" FROM rendimientoseleccion A INNER JOIN rendimientoseleccion B ON  A.Id_Partido = B.Id_Partido AND A.Id_Seleccion != B.Id_Seleccion INNER JOIN seleccion C ON C.Id_Seleccion = A.Id_Seleccion INNER JOIN seleccion D ON D.Id_Seleccion = B.Id_Seleccion GROUP BY A.Id_Partido,B.Id_Partido');

    	return  response()->json($partidos ,200);
    }

    function getPartidoById( $Id_Partido ) {

        $partido = DB::select('SELECT A.Id_Partido "Id_Partido", (SELECT E.Fecha_Partido FROM partido E WHERE A.Id_Partido = E.Id_Partido) "Fecha_Partido", C.Nombre_Seleccion "Equipo_1", A.NumeroGoles_Rendimiento "Goles_1", D.Nombre_Seleccion "Equipo_2", B.NumeroGoles_Rendimiento "Goles_2" FROM rendimientoseleccion A  INNER JOIN rendimientoseleccion B ON  A.Id_Partido = B.Id_Partido AND A.Id_Partido = '.$Id_Partido.' AND A.Id_Seleccion != B.Id_Seleccion  INNER JOIN seleccion C ON C.Id_Seleccion = A.Id_Seleccion INNER JOIN seleccion D ON D.Id_Seleccion = B.Id_Seleccion GROUP BY A.Id_Partido,B.Id_Partido');

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
            $partido = DB::select("CALL insertar_partido('".$date."','".$team1."','".$team2."',$score1,$score2)");
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
            $partido = DB::select("CALL actualizar_partido($id,'".$date."','".$team1."','".$team2."',$score1,$score2)");
        }
        
        return response()->json($partido,200);
    }

 
    function delete(Request $request, $Id_Seleccion)
    {

        $partido = DB::select("CALL eliminar_partido($Id_Seleccion)");

        return response()->json($partido, 200);
    }



}
