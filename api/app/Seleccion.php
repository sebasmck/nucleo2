<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model{

	protected $table = 'Seleccion';

	protected $primaryKey = 'Id_seleccion';

	public $timestamps = false;

	protected $fillable = ['Nombre_Seleccion', 'Imagen_Seleccion', 'Puntos_Seleccion'];

}