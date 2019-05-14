<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ComboProducto
 * 
 * @property int $id_comb_prod
 * @property int $id_producto
 * @property int $id_combo
 * @property int $cantidad
 *
 * @package App\Models
 */
class ComboProducto extends Eloquent
{
	protected $table = 'combo_producto';
	protected $primaryKey = 'id_comb_prod';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'id_combo' => 'int',
		'cantidad' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'id_combo',
		'cantidad'
	];
}
