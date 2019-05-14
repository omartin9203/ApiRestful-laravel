<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Municipio
 * 
 * @property int $id_municipio
 * @property int $id_provincia
 * @property string $nombre
 * @property string $codigopostal
 *
 * @package App\Models
 */
class Municipio extends Eloquent
{
	protected $primaryKey = 'id_municipio';
	public $timestamps = false;

	protected $casts = [
		'id_provincia' => 'int'
	];

	protected $fillable = [
		'id_provincia',
		'nombre',
		'codigopostal'
	];
}
