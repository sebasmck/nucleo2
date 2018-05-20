<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response  = $client->request('GET', "/partidos");

        $partidos = json_decode($response->getBody()->getContents());
        

        return view ('admin.ver_tablas_partidos')->with('partidos', $partidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

         $response = $client->request('GET', '/nombresSelecciones');

         $datosSelecciones = json_decode($response->getBody()->getContents());

        return view('admin.crear_partido')->with('nombres',$datosSelecciones);
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

        $response = $client->request('POST', '/createPartido', [
            'form_params' => [
                'date' => $request->date,
                'equipo1' => $request->equipo1,
                'equipo2' => $request->equipo2,
                'score1' => $request->score1,
                'score2' => $request->score2
            ]
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
    public function edit($id)
    {
         $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response  = $client->request('GET', "/partido/{$id}");

        $partido = json_decode($response->getBody()->getContents());

        return view('admin.modificar_partido')->with('partido', $partido[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $client = new Client([
            'base_uri' => 'http://progenesistecno.ddns.net:8100'
        ]);

        $response  = $client->request('PUT', "/partido/{$id}",[
            'form_params' => [
                'date' => $request->date,
                'equipo1' => $request->equipo1,
                'equipo2' => $request->equipo2,
                'score1' => $request->score1,
                'score2' => $request->score2
            ]
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

        $response  = $client->request('DELETE', "/partido/{$id}");

        return back();
    }
}
