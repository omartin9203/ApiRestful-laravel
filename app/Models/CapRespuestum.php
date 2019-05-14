<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CapRespuestum
 * 
 * @property int $id_respuesta
 * @property int $id_preg
 * @property string $respuesta
 * @property string $es_correcta
 *
 * @package App\Models
 */
class CapRespuestum extends Eloquent
{
	protected $primaryKey = 'id_respuesta';
	public $timestamps = false;

	protected $casts = [
		'id_preg' => 'int'
	];

	protected $fillable = [
		'id_preg',
		'respuesta',
		'es_correcta'
	];
}
