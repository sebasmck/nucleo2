<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'Pais';

    protected $primarykey = 'IdPais';

    public $timestamp = false;


    public function jugadores(){

    	return $this->hasMany('App\Jugador', 'Idpais', 'Idpais');

    }


}
