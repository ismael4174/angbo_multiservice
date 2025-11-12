<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 *
 * @property int $id
 * @property int|null $type_service_id
 * @property string $titre
 * @property string|null $description
 * @property string|null $image
 * @property array|null $galerie
 * @property string|null $slug
 * @property int|null $ordre_affichage
 * @property bool|null $est_actif
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property TypeService|null $type_service
 * @property Collection|Category[] $categories
 * @property Collection|Produit[] $produits
 *
 * @package App\Models
 */
class Service extends Model
{
	// use SoftDeletes;
	protected $table = 'services';

	protected $casts = [
		'type_service_id' => 'int',
		'ordre_affichage' => 'int',
		'est_actif' => 'bool',
        'galerie' => 'array',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'type_service_id',
		'titre',
		'description',
		'image',
		'slug',
		'ordre_affichage',
		'est_actif',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function type_service()
	{
		return $this->belongsTo(TypeService::class);
	}

	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	public function produits()
	{
		return $this->hasMany(Produit::class);
	}
}
