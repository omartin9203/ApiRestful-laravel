<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AlmacenEmp
 * 
 * @property int $id_almacen
 * @property int $id_producto
 * @property int $existencia
 * @property int $id_emp
 *
 * @package App\Models
 */
class AlmacenEmp extends Eloquent
{
	protected $table = 'almacen_emp';
	protected $primaryKey = 'id_almacen';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'existencia' => 'int',
		'id_emp' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'existencia',
		'id_emp'
	];
}
