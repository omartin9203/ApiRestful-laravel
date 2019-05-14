<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 00:53:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Producto
 * 
 * @property int $id_producto
 * @property string $nombre_prod
 * @property string $url_imagen
 * @property float $costo
 * @property float $precio
 * @property string $es_repuesto
 * @property int $existencia
 * @property int $vencimiento
 * @property string $reg_cancelado
 * @property float $alto
 * @property float $ancho
 * @property float $largo
 * @property float $peso
 * @property string $sku
 * @property int $id_categoria
 * @property float $valor_declarado
 * @property string $link_tienda
 *
 * @package App\Models
 */
class Producto extends Eloquent
{
	protected $primaryKey = 'id_producto';
	public $timestamps = false;

	protected $casts = [
		'costo' => 'float',
		'precio' => 'float',
		'existencia' => 'int',
		'vencimiento' => 'int',
		'alto' => 'float',
		'ancho' => 'float',
		'largo' => 'float',
		'peso' => 'float',
		'id_categoria' => 'int',
		'valor_declarado' => 'float'
	];

	protected $fillable = [
		'nombre_prod',
		'url_imagen',
		'costo',
		'precio',
		'es_repuesto',
		'existencia',
		'vencimiento',
		'reg_cancelado',
		'alto',
		'ancho',
		'largo',
		'peso',
		'sku',
		'id_categoria',
		'valor_declarado',
		'link_tienda'
	];
}
