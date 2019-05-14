<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Combo
 * 
 * @property int $id_combo
 * @property string $nombre_combo
 * @property string $url_imagen
 * @property string $precio_combo
 * @property int $existencia
 * @property string $costo
 * @property string $estado_combo
 *
 * @package App\Models
 */
class Combo extends Eloquent
{
	protected $table = 'combo';
	protected $primaryKey = 'id_combo';
	public $timestamps = false;

	protected $casts = [
		'existencia' => 'int'
	];

	protected $fillable = [
		'nombre_combo',
		'url_imagen',
		'precio_combo',
		'existencia',
		'costo',
		'estado_combo'
	];
}
