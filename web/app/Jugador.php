<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'Jugador';

    protected $primaryKey = 'IdJugador';

    public $timestamps = false;
}
