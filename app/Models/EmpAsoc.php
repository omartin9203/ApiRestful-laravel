<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EmpAsoc
 * 
 * @property int $id_emp_asoc
 * @property int $id_padre
 * @property int $id_hijo
 *
 * @package App\Models
 */
class EmpAsoc extends Eloquent
{
	protected $table = 'emp_asoc';
	protected $primaryKey = 'id_emp_asoc';
	public $timestamps = false;

	protected $casts = [
		'id_padre' => 'int',
		'id_hijo' => 'int'
	];

	protected $fillable = [
		'id_padre',
		'id_hijo'
	];
}
