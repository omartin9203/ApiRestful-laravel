<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MovimientoCartera
 * 
 * @property int $id_mov
 * @property \Carbon\Carbon $fecha_mov
 * @property string $no_compra
 * @property float $movimiento
 * @property float $saldo
 *
 * @package App\Models
 */
class MovimientoCartera extends Eloquent
{
	protected $table = 'movimiento_cartera';
	protected $primaryKey = 'id_mov';
	public $timestamps = false;

	protected $casts = [
		'movimiento' => 'float',
		'saldo' => 'float'
	];

	protected $dates = [
		'fecha_mov'
	];

	protected $fillable = [
		'fecha_mov',
		'no_compra',
		'movimiento',
		'saldo'
	];
}
