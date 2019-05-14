<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pedido
 * 
 * @property int $id_pedidos
 * @property int $id_cliente
 * @property int $id_emp
 * @property string $no_pedido
 * @property \Carbon\Carbon $fecha_solicitud
 * @property float $total
 * @property string $despachado
 * @property string $acreditado
 *
 * @package App\Models
 */
class Pedido extends Eloquent
{
	protected $primaryKey = 'id_pedidos';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_emp' => 'int',
		'total' => 'float'
	];

	protected $dates = [
		'fecha_solicitud'
	];

	protected $fillable = [
		'id_cliente',
		'id_emp',
		'no_pedido',
		'fecha_solicitud',
		'total',
		'despachado',
		'acreditado'
	];
}
