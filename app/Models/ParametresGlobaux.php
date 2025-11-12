<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParametresGlobaux
 *
 * @property int $id
 * @property string|null $nom_directeur
 * @property string|null $logo
 * @property string|null $nom_entreprise
 * @property string|null $localisation
 * @property int|null $annee_experience
 * @property string|null $titre
 * @property string|null $image1
 * @property string|null $image2
 * @property string|null $caracteristique_1
 * @property string|null $caracteristique_2
 * @property string|null $caracteristique_3
 * @property string|null $caracteristique_4
 * @property string|null $caracteristique_5
 * @property string|null $caracteristique_6
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $mobile
 * @property Carbon|null $heure_ouverture
 * @property Carbon|null $heure_fermerture
 * @property string|null $slogan
 * @property string|null $description
 *
 * @package App\Models
 */
class ParametresGlobaux extends Model
{
	protected $table = 'parametres_globaux';
	public $timestamps = false;

	protected $casts = [
		'annee_experience' => 'int',
		'heure_ouverture' => 'datetime',
		'heure_fermerture' => 'datetime'
	];

	protected $fillable = [
		'nom_directeur',
		'logo',
		'nom_entreprise',
		'localisation',
		'annee_experience',
		'titre',
		'image1',
		'image2',
		'caracteristique_1',
		'caracteristique_2',
		'caracteristique_3',
		'caracteristique_4',
		'caracteristique_5',
		'caracteristique_6',
		'email',
		'telephone',
		'mobile',
		'heure_ouverture',
		'heure_fermerture',
		'slogan'
	];
}
