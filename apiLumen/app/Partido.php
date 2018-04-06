<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model {
    
    protected $table = 'Partido';

    protected $primaryKey = 'Id_Partido';

    protected $fillable = ['Fecha_partido'];

    public $timestamps = false;

   
}
