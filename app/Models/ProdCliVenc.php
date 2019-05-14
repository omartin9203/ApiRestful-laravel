<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProdCliVenc
 * 
 * @property int $id_prod_vencimiento
 * @property int $id_prod_cli
 *
 * @package App\Models
 */
class ProdCliVenc extends Eloquent
{
	protected $table = 'prod_cli_venc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_prod_vencimiento' => 'int',
		'id_prod_cli' => 'int'
	];

	protected $fillable = [
		'id_prod_vencimiento',
		'id_prod_cli'
	];
}
