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
 * Class TypeProduit
 *
 * @property int $id
 * @property string $nom
 * @property string|null $description
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property Collection|Produit[] $produits
 *
 * @package App\Models
 */
class TypeProduit extends Model
{
	// use SoftDeletes;
	protected $table = 'type_produits';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nom',
		'description',
		'slug',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function produits()
	{
		return $this->hasMany(Produit::class);
	}
}
