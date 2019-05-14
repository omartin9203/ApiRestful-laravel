<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductoCliente
 * 
 * @property int $id_prod_cli
 * @property \Carbon\Carbon $fecha_compra
 * @property int $id_producto
 * @property int $id_cliente
 *
 * @package App\Models
 */
class ProductoCliente extends Eloquent
{
	protected $table = 'producto_cliente';
	protected $primaryKey = 'id_prod_cli';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'id_cliente' => 'int'
	];

	protected $dates = [
		'fecha_compra'
	];

	protected $fillable = [
		'fecha_compra',
		'id_producto',
		'id_cliente'
	];
}
