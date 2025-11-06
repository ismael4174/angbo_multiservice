<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Caroussel
 * 
 * @property int $id
 * @property int $type_carousel_id
 * @property string|null $titre
 * @property string|null $sous_titre
 * @property string|null $description
 * @property string $photo
 * 
 * @property Caroussel $caroussel
 * @property Collection|Caroussel[] $caroussels
 *
 * @package App\Models
 */
class Caroussel extends Model
{
	protected $table = 'caroussel';
	public $timestamps = false;

	protected $casts = [
		'type_carousel_id' => 'int'
	];

	protected $fillable = [
		'type_carousel_id',
		'titre',
		'sous_titre',
		'description',
		'photo'
	];

	public function caroussel()
	{
		return $this->belongsTo(Caroussel::class, 'type_carousel_id');
	}

	public function caroussels()
	{
		return $this->hasMany(Caroussel::class, 'type_carousel_id');
	}
}
