<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceAgence
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $logo
 *
 * @property Collection|Agence[] $agences
 *
 * @package App\Models
 */
class ServiceAgence extends Model
{
	protected $table = 'service_agences';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'logo'
	];

	public function agences()
	{
		return $this->hasMany(Agence::class, 'service_agences_id');
	}
}
