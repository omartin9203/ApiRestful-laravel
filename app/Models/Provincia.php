<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Provincia
 * 
 * @property int $id_provincia
 * @property string $nombre
 * @property int $id_pais
 *
 * @package App\Models
 */
class Provincia extends Eloquent
{
	protected $primaryKey = 'id_provincia';
	public $timestamps = false;

	protected $casts = [
		'id_pais' => 'int'
	];

	protected $fillable = [
		'nombre',
		'id_pais'
	];
}
