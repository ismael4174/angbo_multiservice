<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeCarousel
 * 
 * @property int $id
 * @property string $nom
 * 
 * @property Collection|Galerie[] $galeries
 *
 * @package App\Models
 */
class TypeCarousel extends Model
{
	protected $table = 'type_carousel';
	public $timestamps = false;

	protected $fillable = [
		'nom'
	];

	public function galeries()
	{
		return $this->hasMany(Galerie::class);
	}
}
