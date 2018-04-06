<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model {
    
    protected $table = 'Seleccion';

    protected $primaryKey = 'Id_Seleccion';

    protected $fillable = ['Nombre_Seleccion','Imagen_Seleccion', 'Puntos_Seleccion'];

    protected $dates = [];

    public $timestamps = false;

    // Relationships

        public function jugadores(){
        	return $this->HasMany('App\Jugador', 'Id_Seleccion', 'Id_Seleccion');
        }

        public function historial(){
            return $this->HasOne('App\Historial', 'Id_Seleccion', 'Id_Seleccion');
        }
}
