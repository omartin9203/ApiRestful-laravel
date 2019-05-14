<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MontoComisione
 * 
 * @property int $id_monto
 * @property string $monto_minimo
 * @property \Carbon\Carbon $fecha
 *
 * @package App\Models
 */
class MontoComisione extends Eloquent
{
	protected $primaryKey = 'id_monto';
	public $timestamps = false;

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'monto_minimo',
		'fecha'
	];
}
