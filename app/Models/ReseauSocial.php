<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReseauSocial
 * 
 * @property int $id
 * @property string|null $nom
 * @property string $icone
 * @property string $lien
 *
 * @package App\Models
 */
class ReseauSocial extends Model
{
	protected $table = 'reseau_social';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'icone',
		'lien'
	];
}
