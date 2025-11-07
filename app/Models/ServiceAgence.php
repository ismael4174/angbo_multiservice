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
 * @property Collection|AgenceService[] $agence_services
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

    public function agence_services()
    {
        return $this->hasMany(AgenceService::class, 'service_id');
    }

    public function agences()
    {
        return $this->belongsToMany(Agence::class, 'agence_service', 'service_id', 'agence_id');
    }
}
