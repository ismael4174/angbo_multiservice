<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
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
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $ville
 * @property string|null $commune
 * @property string|null $quartier
 * @property string|null $localisation
 * @property string|null $pays
 * @property string|null $description
 * @property Carbon|null $heure_ouverture
 * @property Carbon|null $heure_fermeture
 * @property string|null $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|AgenceService[] $agence_services
 *
 * @package App\Models
 */
class Agence extends Model
{
    use SoftDeletes;
    protected $table = 'agences';

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'heure_ouverture' => 'datetime',
        'heure_fermeture' => 'datetime'
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
        'commune',
        'quartier',
        'localisation',
        'pays',
        'description',
        'heure_ouverture',
        'heure_fermeture',
        'statut'
    ];

    public function agence_services()
    {
        return $this->hasMany(AgenceService::class);
    }

    public function service_agences()
    {
        return $this->belongsToMany(ServiceAgence::class, 'agence_service', 'agence_id', 'service_id');
    }
}
