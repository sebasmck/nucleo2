<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

    protected $fillable = ['Nombre_Jugador',
    'PuntajeGeneral_Jugador',
    'Id_Seleccion',
    'Foto_Jugador',
	'ConvocadoMundial_Jugador'];

    // Relationships
     protected $table = 'jugador';

     protected $primaryKey = 'Id_Jugador';

     public $timestamps = false;
}
