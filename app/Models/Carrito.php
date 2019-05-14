<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Carrito
 * 
 * @property int $id_car
 * @property int $id_emp
 * @property \Carbon\Carbon $fecha_car
 * @property int $id_producto
 * @property float $precio_car
 * @property int $cantidad
 * @property float $importe
 * @property string $es_combo
 *
 * @package App\Models
 */
class Carrito extends Eloquent
{
	protected $table = 'carrito';
	protected $primaryKey = 'id_car';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'id_producto' => 'int',
		'precio_car' => 'float',
		'cantidad' => 'int',
		'importe' => 'float'
	];

	protected $dates = [
		'fecha_car'
	];

	protected $fillable = [
		'id_emp',
		'fecha_car',
		'id_producto',
		'precio_car',
		'cantidad',
		'importe',
		'es_combo'
	];
}
