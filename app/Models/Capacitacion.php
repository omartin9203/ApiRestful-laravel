<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Capacitacion
 * 
 * @property int $id_cap
 * @property string $titulo_video
 * @property string $descripcion
 * @property string $imag_portada
 * @property string $url_video
 * @property string $evaluacion
 * @property \Carbon\Carbon $fecha_public
 * @property int $orden_visual
 *
 * @package App\Models
 */
class Capacitacion extends Eloquent
{
	protected $table = 'capacitacion';
	protected $primaryKey = 'id_cap';
	public $timestamps = false;

	protected $casts = [
		'orden_visual' => 'int'
	];

	protected $dates = [
		'fecha_public'
	];

	protected $fillable = [
		'titulo_video',
		'descripcion',
		'imag_portada',
		'url_video',
		'evaluacion',
		'fecha_public',
		'orden_visual'
	];
}
