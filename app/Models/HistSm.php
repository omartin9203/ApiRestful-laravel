<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HistSm
 * 
 * @property int $id_sms
 * @property int $id_cliente
 * @property \Carbon\Carbon $fecha_notif_sms
 *
 * @package App\Models
 */
class HistSm extends Eloquent
{
	protected $primaryKey = 'id_sms';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int'
	];

	protected $dates = [
		'fecha_notif_sms'
	];

	protected $fillable = [
		'id_cliente',
		'fecha_notif_sms'
	];
}
