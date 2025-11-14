<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicule
 *
 * @property int $id
 * @property string|null $titre
 * @property int $marque_id
 * @property string|null $modele
 * @property int|null $annee
 * @property string|null $immatriculation
 * @property string|null $carburant
 * @property int|null $puissance
 * @property int|null $kilometrage
 * @property string|null $transmission
 * @property int|null $nombre_places
 * @property int|null $nombre_portes
 * @property string|null $couleur
 * @property string|null $type_transac
 * @property float|null $prix
 * @property string|null $devise
 * @property string|null $whatsapp_contact
 * @property bool|null $disponible
 * @property string|null $image_principale
 * @property array|null $galerie
 * @property string|null $description
 * @property bool|null $en_vedette
 * @property bool|null $archive
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Marque $marque
 *
 * @package App\Models
 */
class Vehicule extends Model
{
	protected $table = 'vehicules';

	protected $casts = [
		'marque_id' => 'int',
		'annee' => 'int',
		'puissance' => 'int',
		'kilometrage' => 'int',
		'nombre_places' => 'int',
		'nombre_portes' => 'int',
		'prix' => 'float',
		'disponible' => 'bool',
		'galerie' => 'array',
		'en_vedette' => 'bool',
		'archive' => 'bool'
	];

	protected $fillable = [
		'titre',
		'marque_id',
		'modele',
		'annee',
		'immatriculation',
		'carburant',
		'puissance',
		'kilometrage',
		'transmission',
		'nombre_places',
		'nombre_portes',
		'couleur',
		'type_transac',
		'prix',
		'devise',
		'whatsapp_contact',
		'disponible',
		'image_principale',
		'galerie',
		'description',
		'en_vedette',
		'archive'
	];

	public function marque()
	{
		return $this->belongsTo(Marque::class);
	}
}
