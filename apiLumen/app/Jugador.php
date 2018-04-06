<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

    protected $fillable = [];

    // Relationships
     protected $table = 'Jugador';

     protected $primaryKey = 'Id_Jugador';
}
