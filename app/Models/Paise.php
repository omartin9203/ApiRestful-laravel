<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paise
 * 
 * @property int $id
 * @property string $nombre
 *
 * @package App\Models
 */
class Paise extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}