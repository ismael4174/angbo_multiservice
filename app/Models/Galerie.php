<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Galerie
 *
 * @property int $id
 * @property string|null $titre
 * @property string $fichier
 * @property string|null $type
 * @property string|null $description
 * @property bool|null $est_visible
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @package App\Models
 */
class Galerie extends Model
{
	// use SoftDeletes;
	protected $table = 'galerie';

	protected $casts = [
		'est_visible' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'titre',
		'fichier',
		'type',
		'description',
		'est_visible',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
