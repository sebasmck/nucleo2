<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function createJugador($Id_Seleccion){
        return view('admin.crear_jugador')->with('Id_Seleccion', $Id_Seleccion);
    }


    public function create($Id_Seleccion)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response = $client->request('POST', '/createJugador', [
            'form_params' => [
                'Id_Seleccion' => $request->Id_Seleccion,
                'Nombre_Jugador' => $request->Nombre_Jugador,
                'PuntajeGeneral_Jugador' => $request->PuntajeGeneral_Jugador,
                'Foto_Jugador' => $request->Foto_Jugador,
                'ConvocadoMundial_Jugador' => $request->Convocado ]
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $Id_Jugador )
    {
        $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response = $client->request('GET', "/jugador/{$Id_Jugador}");

        $jugador = json_decode($response->getBody()->getContents());


        return view ('admin.modificar_jugador')->with('jugador' , $jugador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,  $Id_Jugador)
    {
        $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response = $client->request('PUT', "/jugador/{$Id_Jugador}", [
            'form_params' => [
                'Nombre_Jugador' => $request->Nombre_Jugador,
                'PuntajeGeneral_Jugador' => $request->PuntajeGeneral_Jugador,
                'Foto_Jugador' => $request->Foto_Jugador,
                'ConvocadoMundial_Jugador' => $request->Convocado ]
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response  = $client->request('DELETE', "/jugador/{$id}");

        return back()->with('success', 'You have successfully delete player.');
    }
}
