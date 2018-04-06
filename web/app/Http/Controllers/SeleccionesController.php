<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SeleccionesController extends Controller
{
    
    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:8080'
        ]);

        $response  = $client->request('GET', '/selecciones');

        $selecciones = json_decode($response->getBody()->getContents());
        
        return view ('admin.ver_tablas_selecciones')->with('selecciones', $selecciones);
    }

    
    public function create()
    {
        
        return view('admin.crear_equipos');

    }

    
    public function store(Request $request)
    {

        $client = new Client([
            'base_uri' => 'http://localhost:8080'
        ]);

        $response = $client->request('POST', '/createSeleccion', [
            'form_params' => [
                'Nombre_Seleccion' => $request->Nombre_Seleccion,
                'Imagen_Seleccion' => $request->Imagen_Seleccion,
                'Puntos_Seleccion' => $request->Puntos_Seleccion
            ]
        ]);

        return back();
    }

    
    public function show($Id_Seleccion)
    {   


        $client = new Client([
            'base_uri' => 'http://localhost:8080'
        ]);

        $response  = $client->request('GET', "/selecciones/{$Id_Seleccion}");

        $jugadores = json_decode($response->getBody()->getContents());
        
        return view ('admin.ver_tablas_jugadores')->with('jugadores', $jugadores)->with('Id_Seleccion', $Id_Seleccion);

    }


    public function showHistorial($Id_Seleccion){

        $client = new Client([
            'base_uri' => 'http://localhost:8080'
        ]);

        $response  = $client->request('GET', "/selecciones/{$Id_Seleccion}/historial");

        $historial = json_decode($response->getBody()->getContents());
        
        return view ('admin.ver_historial')->with('historial', $historial);

    }

    public function imageUploadPost(){

        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
