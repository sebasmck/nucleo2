<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model{

	protected $table = 'Historial';

	protected $primaryKey = 'IdHistorial';

	protected $timestamps = false;

	protected $fillable = ['PartidosGanados_Historial', 'PartidosJugados_Historial', 'PartiosEmpatadosHistorial', 'PartidosPerdidos_Historial'];

	


}