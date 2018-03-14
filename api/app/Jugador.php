<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model{

	protected $table = 'Jugador';

	protected $primaryKey = 'IdJugador';

	public $timestamps = false;

	protected $fillable = ['Nombre_Jugador', 'PuntajeGeneral_Jugador', 'Id_Seleccion','Foto_Jugador'];

}