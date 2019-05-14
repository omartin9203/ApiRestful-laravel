<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PromoProducto
 * 
 * @property int $id_promo_prod
 * @property int $id_promo
 * @property int $id_producto
 * @property string $es_combo
 *
 * @package App\Models
 */
class PromoProducto extends Eloquent
{
	protected $table = 'promo_producto';
	protected $primaryKey = 'id_promo_prod';
	public $timestamps = false;

	protected $casts = [
		'id_promo' => 'int',
		'id_producto' => 'int'
	];

	protected $fillable = [
		'id_promo',
		'id_producto',
		'es_combo'
	];
}
