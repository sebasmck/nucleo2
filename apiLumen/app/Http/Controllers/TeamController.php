<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Team as Team;

class TeamController extends BaseController
{
    function index() {

    	$teams = Team::all();
    	return  response()->json( $teams ,200 );
    }
}
