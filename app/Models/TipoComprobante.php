<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoComprobante
 * 
 * @property int $id
 * @property string $nombre
 * @property int $cantidad
 * @property int $year
 * @property int $id_emp
 *
 * @package App\Models
 */
class TipoComprobante extends Eloquent
{
	protected $table = 'tipo_comprobante';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'year' => 'int',
		'id_emp' => 'int'
	];

	protected $fillable = [
		'nombre',
		'cantidad',
		'year',
		'id_emp'
	];
}
