<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdenCompra
 * 
 * @property int $id_orden
 * @property string $no_orden
 * @property string $year
 *
 * @package App\Models
 */
class OrdenCompra extends Eloquent
{
	protected $table = 'orden_compra';
	protected $primaryKey = 'id_orden';
	public $timestamps = false;

	protected $fillable = [
		'no_orden',
		'year'
	];
}
