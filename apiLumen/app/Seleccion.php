<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];


        protected $table = 'Seleccion';

        protected $primaryKey = 'Id_Seleccion';


            // Relationships

        public function jugadores(){
        	return $this->HasMany('App\Jugador', 'Id_Seleccion', 'Id_Seleccion');
        }

        public function historial()(){
            return $this->HasOne('App\Historial', 'IdSeleccion', 'IdSeleccion');
        }
}
