<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

    protected $fillable = ['Nombre_Jugador',
    'PuntajeGeneral_Jugador',
    'Id_Seleccion',
    'Foto_Jugador'];

    // Relationships
     protected $table = 'Jugador';

     protected $primaryKey = 'Id_Jugador';

     public $timestamps = false;
}
