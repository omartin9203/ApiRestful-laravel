<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DetalleCompra
 * 
 * @property int $id_detalle_comp
 * @property int $id_compra
 * @property int $id_producto
 * @property float $precio_comp
 * @property int $cantidad_comp
 * @property float $importe
 * @property string $es_combo
 *
 * @package App\Models
 */
class DetalleCompra extends Eloquent
{
	protected $table = 'detalle_compra';
	protected $primaryKey = 'id_detalle_comp';
	public $timestamps = false;

	protected $casts = [
		'id_compra' => 'int',
		'id_producto' => 'int',
		'precio_comp' => 'float',
		'cantidad_comp' => 'int',
		'importe' => 'float'
	];

	protected $fillable = [
		'id_compra',
		'id_producto',
		'precio_comp',
		'cantidad_comp',
		'importe',
		'es_combo'
	];
}
