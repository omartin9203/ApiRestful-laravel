<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EmpCap
 * 
 * @property int $id_emp_cap
 * @property int $id_emp
 * @property int $id_cap
 * @property string $evaluacion_video
 *
 * @package App\Models
 */
class EmpCap extends Eloquent
{
	protected $table = 'emp_cap';
	protected $primaryKey = 'id_emp_cap';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'id_cap' => 'int'
	];

	protected $fillable = [
		'id_emp',
		'id_cap',
		'evaluacion_video'
	];
}
