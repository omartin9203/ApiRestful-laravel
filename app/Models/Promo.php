<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Promo
 * 
 * @property int $id_promo
 * @property string $nombre_promo
 * @property \Carbon\Carbon $fecha_inicio
 * @property \Carbon\Carbon $fecha_fin
 * @property string $descuento
 * @property string $estado_promo
 *
 * @package App\Models
 */
class Promo extends Eloquent
{
	protected $table = 'promo';
	protected $primaryKey = 'id_promo';
	public $timestamps = false;

	protected $dates = [
		'fecha_inicio',
		'fecha_fin'
	];

	protected $fillable = [
		'nombre_promo',
		'fecha_inicio',
		'fecha_fin',
		'descuento',
		'estado_promo'
	];
}
