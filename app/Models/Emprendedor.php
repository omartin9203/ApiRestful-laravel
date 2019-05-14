<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Emprendedor
 * 
 * @property int $id_emp
 * @property string $identificador_emp
 * @property string $nombre_emp
 * @property string $apellido
 * @property string $foto_emp
 * @property string $email
 * @property string $password
 * @property int $dni_emp
 * @property int $telefono_emp
 * @property string $categoria
 * @property float $comision_acumulada
 * @property string $estado_pago
 * @property \Carbon\Carbon $fecha_insc
 * @property int $id_cap
 * @property string $perfil
 * @property int $estado
 * @property string $firmo_contrato
 * @property int $id_pais
 * @property int $admin_cabeza
 * @property int $cons_venta
 * @property string $status_cli
 *
 * @package App\Models
 */
class Emprendedor extends Eloquent
{
	protected $table = 'emprendedor';
	protected $primaryKey = 'id_emp';
	public $timestamps = false;

	protected $casts = [
		'dni_emp' => 'int',
		'telefono_emp' => 'int',
		'comision_acumulada' => 'float',
		'id_cap' => 'int',
		'estado' => 'int',
		'id_pais' => 'int',
		'admin_cabeza' => 'int',
		'cons_venta' => 'int'
	];

	protected $dates = [
		'fecha_insc'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'identificador_emp',
		'nombre_emp',
		'apellido',
		'foto_emp',
		'email',
		'password',
		'dni_emp',
		'telefono_emp',
		'categoria',
		'comision_acumulada',
		'estado_pago',
		'fecha_insc',
		'id_cap',
		'perfil',
		'estado',
		'firmo_contrato',
		'id_pais',
		'admin_cabeza',
		'cons_venta',
		'status_cli'
	];
}
