<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HistEmail
 * 
 * @property int $id_hist
 * @property int $id_cliente
 * @property \Carbon\Carbon $fecha_notif
 *
 * @package App\Models
 */
class HistEmail extends Eloquent
{
	protected $table = 'hist_email';
	protected $primaryKey = 'id_hist';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int'
	];

	protected $dates = [
		'fecha_notif'
	];

	protected $fillable = [
		'id_cliente',
		'fecha_notif'
	];
}
