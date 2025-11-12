<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Marque
 * 
 * @property int $id
 * @property string $nom
 * @property string $logo
 * 
 * @property Collection|Vehicule[] $vehicules
 *
 * @package App\Models
 */
class Marque extends Model
{
	protected $table = 'marques';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'logo'
	];

	public function vehicules()
	{
		return $this->hasMany(Vehicule::class);
	}
}
