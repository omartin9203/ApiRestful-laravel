<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProdVencimiento
 * 
 * @property int $id_prod_vencimiento
 * @property \Carbon\Carbon $fecha_vencimiento
 * @property int $id_cliente
 * @property int $id_respuesto
 *
 * @package App\Models
 */
class ProdVencimiento extends Eloquent
{
	protected $table = 'prod_vencimiento';
	protected $primaryKey = 'id_prod_vencimiento';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_respuesto' => 'int'
	];

	protected $dates = [
		'fecha_vencimiento'
	];

	protected $fillable = [
		'fecha_vencimiento',
		'id_cliente',
		'id_respuesto'
	];
}
