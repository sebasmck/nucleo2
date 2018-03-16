<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
     protected $table = 'seleccion';
}
