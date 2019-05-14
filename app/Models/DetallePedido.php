<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DetallePedido
 * 
 * @property int $id_det_ped
 * @property int $id_pedidos
 * @property int $id_producto
 * @property float $precio_pedido
 * @property int $cantidad
 * @property float $importe
 *
 * @package App\Models
 */
class DetallePedido extends Eloquent
{
	protected $table = 'detalle_pedido';
	protected $primaryKey = 'id_det_ped';
	public $timestamps = false;

	protected $casts = [
		'id_pedidos' => 'int',
		'id_producto' => 'int',
		'precio_pedido' => 'float',
		'cantidad' => 'int',
		'importe' => 'float'
	];

	protected $fillable = [
		'id_pedidos',
		'id_producto',
		'precio_pedido',
		'cantidad',
		'importe'
	];
}
