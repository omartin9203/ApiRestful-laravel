<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CapPregunta
 * 
 * @property int $id_preg
 * @property int $id_cap
 * @property string $pregunta
 *
 * @package App\Models
 */
class CapPregunta extends Eloquent
{
	protected $primaryKey = 'id_preg';
	public $timestamps = false;

	protected $casts = [
		'id_cap' => 'int'
	];

	protected $fillable = [
		'id_cap',
		'pregunta'
	];
}
