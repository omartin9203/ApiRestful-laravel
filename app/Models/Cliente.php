<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cliente
 * 
 * @property int $id_cliente
 * @property int $id_emp
 * @property string $nombre_cliente
 * @property string $apellidos
 * @property int $dni
 * @property int $telefono
 * @property string $email
 * @property string $celular
 * @property string $direccion
 * @property \Carbon\Carbon $fecha_nacimiento
 * @property \Carbon\Carbon $fecha_incio
 * @property int $id_municipio
 * @property int $id_provincia
 * @property int $id_pais
 *
 * @package App\Models
 */
class Cliente extends Eloquent
{
	protected $table = 'cliente';
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'dni' => 'int',
		'telefono' => 'int',
		'id_municipio' => 'int',
		'id_provincia' => 'int',
		'id_pais' => 'int'
	];

	protected $dates = [
		'fecha_nacimiento',
		'fecha_incio'
	];

	protected $fillable = [
		'id_emp',
		'nombre_cliente',
		'apellidos',
		'dni',
		'telefono',
		'email',
		'celular',
		'direccion',
		'fecha_nacimiento',
		'fecha_incio',
		'id_municipio',
		'id_provincia',
		'id_pais'
	];
}
