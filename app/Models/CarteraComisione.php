<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarteraComisione
 * 
 * @property int $id_cart_com
 * @property int $id_emp
 * @property \Carbon\Carbon $fecha
 * @property string $no_compra
 * @property float $moviento
 * @property float $saldo
 * @property int $tipo
 *
 * @package App\Models
 */
class CarteraComisione extends Eloquent
{
	protected $primaryKey = 'id_cart_com';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'moviento' => 'float',
		'saldo' => 'float',
		'tipo' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'id_emp',
		'fecha',
		'no_compra',
		'moviento',
		'saldo',
		'tipo'
	];
}
