<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model{

	protected $table = 'Partido';

	protected $primaryKey = 'Id_Partido';

	protected $timestamps = false;

	protected $fillable = ['Fecha_Partido'];

}