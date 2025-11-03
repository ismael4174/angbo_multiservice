<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produit
 *
 * @property int $id
 * @property int $service_id
 * @property int|null $type_produit_id
 * @property string $titre
 * @property string|null $description
 * @property float|null $prix
 * @property string|null $devise
 * @property string|null $image_principale
 * @property array|null $galerie
 * @property string|null $whatsapp_link
 * @property bool|null $disponible
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property Service $service
 * @property TypeProduit|null $type_produit
 *
 * @package App\Models
 */
class Produit extends Model
{
	// use SoftDeletes;
	protected $table = 'produits';

	protected $casts = [
		'service_id' => 'int',
		'type_produit_id' => 'int',
		'prix' => 'float',
		'galerie' => 'json',
		'disponible' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'service_id',
		'type_produit_id',
		'titre',
		'description',
		'prix',
		'devise',
		'image_principale',
		'galerie',
		'whatsapp_link',
		'disponible',
		'slug',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function service()
	{
		return $this->belongsTo(Service::class);
	}

	public function type_produit()
	{
		return $this->belongsTo(TypeProduit::class);
	}
}
