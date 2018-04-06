<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model {

    protected $table = 'Historial';

    protected $primaryKey = 'Id_Historial';

    protected $fillable = [];

    protected $dates = [];

    public $timestamps = false;

}
