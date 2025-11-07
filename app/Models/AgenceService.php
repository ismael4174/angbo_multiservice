<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgenceService
 * 
 * @property int $agence_id
 * @property int $service_id
 * 
 * @property Agence $agence
 * @property ServiceAgence $service_agence
 *
 * @package App\Models
 */
class AgenceService extends Model
{
	protected $table = 'agence_service';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'agence_id' => 'int',
		'service_id' => 'int'
	];

	public function agence()
	{
		return $this->belongsTo(Agence::class);
	}

	public function service_agence()
	{
		return $this->belongsTo(ServiceAgence::class, 'service_id');
	}
}
