<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Respuesto
 * 
 * @property int $id_resp_prod
 * @property int $id_producto
 * @property int $id_respuesto_hijo
 *
 * @package App\Models
 */
class Respuesto extends Eloquent
{
	protected $primaryKey = 'id_resp_prod';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'id_respuesto_hijo' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'id_respuesto_hijo'
	];
}
