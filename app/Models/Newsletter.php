<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 * 
 * @property int $id
 * @property string|null $nom
 * @property string|null $prenom
 * @property string $email
 * @property string|null $telephone
 * @property string|null $statut
 * @property string|null $source
 * @property Carbon|null $date_inscription
 * @property Carbon|null $date_desinscription
 *
 * @package App\Models
 */
class Newsletter extends Model
{
	protected $table = 'newsletter';
	public $timestamps = false;

	protected $casts = [
		'date_inscription' => 'datetime',
		'date_desinscription' => 'datetime'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'email',
		'telephone',
		'statut',
		'source',
		'date_inscription',
		'date_desinscription'
	];
}
