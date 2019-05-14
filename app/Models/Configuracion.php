<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Configuracion
 * 
 * @property int $id_conf
 * @property string $parametro
 * @property string $valor
 * @property string $descripcion
 *
 * @package App\Models
 */
class Configuracion extends Eloquent
{
	protected $table = 'configuracion';
	protected $primaryKey = 'id_conf';
	public $timestamps = false;

	protected $fillable = [
		'parametro',
		'valor',
		'descripcion'
	];
}
