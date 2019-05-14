<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class IpnOrder
 * 
 * @property int $id_ipn
 * @property int $id_order
 * @property string $status
 * @property \Carbon\Carbon $fecha_create
 * @property string $total_compra
 * @property string $comision
 * @property string $dni_emprend
 *
 * @package App\Models
 */
class IpnOrder extends Eloquent
{
	protected $primaryKey = 'id_ipn';
	public $timestamps = false;

	protected $casts = [
		'id_order' => 'int'
	];

	protected $dates = [
		'fecha_create'
	];

	protected $fillable = [
		'id_order',
		'status',
		'fecha_create',
		'total_compra',
		'comision',
		'dni_emprend'
	];
}
