<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblComisione
 * 
 * @property int $id_tbl_comisiones
 * @property int $rango_inicial
 * @property int $rango_final
 * @property string $valor_comision
 * @property string $categoria
 *
 * @package App\Models
 */
class TblComisione extends Eloquent
{
	protected $primaryKey = 'id_tbl_comisiones';
	public $timestamps = false;

	protected $casts = [
		'rango_inicial' => 'int',
		'rango_final' => 'int'
	];

	protected $fillable = [
		'rango_inicial',
		'rango_final',
		'valor_comision',
		'categoria'
	];
}
