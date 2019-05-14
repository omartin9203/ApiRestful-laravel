<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Compra
 * 
 * @property int $id_compra
 * @property int $id_emp
 * @property int $no_compra
 * @property \Carbon\Carbon $fecha_comp
 * @property float $total_comp
 * @property string $medio_pago
 * @property string $id_link_pago
 * @property float $precio_envio
 * @property string $id_pago
 * @property string $collection_id
 * @property string $collection_status
 * @property string $preference_id
 * @property string $external_reference
 * @property string $payment_type
 * @property string $merchant_order_id
 * @property string $solic_enviada
 * @property string $despachado
 * @property \Carbon\Carbon $fecha_pago
 *
 * @package App\Models
 */
class Compra extends Eloquent
{
	protected $table = 'compra';
	protected $primaryKey = 'id_compra';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'no_compra' => 'int',
		'total_comp' => 'float',
		'precio_envio' => 'float'
	];

	protected $dates = [
		'fecha_comp',
		'fecha_pago'
	];

	protected $fillable = [
		'id_emp',
		'no_compra',
		'fecha_comp',
		'total_comp',
		'medio_pago',
		'id_link_pago',
		'precio_envio',
		'id_pago',
		'collection_id',
		'collection_status',
		'preference_id',
		'external_reference',
		'payment_type',
		'merchant_order_id',
		'solic_enviada',
		'despachado',
		'fecha_pago'
	];
}
