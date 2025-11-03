<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agence
 *
 * @property int $id
 * @property string $nom
 * @property string|null $adresse
 * @property string|null $telephone
 * @property string|null $email
 * @property string|null $responsable
 * @property float $latitude
 * @property float $longitude
 * @property string|null $ville
 * @property string|null $pays
 * @property string|null $description
 * @property string|null $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Agence extends Model
{
	// use SoftDeletes;
	protected $table = 'agences';

	protected $casts = [
		'latitude' => 'float',
		'longitude' => 'float'
	];

	protected $fillable = [
		'nom',
		'adresse',
		'telephone',
		'email',
		'responsable',
		'latitude',
		'longitude',
		'ville',
		'pays',
		'description',
		'statut'
	];
}
