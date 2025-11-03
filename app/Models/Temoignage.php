<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Temoignage
 *
 * @property int $id
 * @property string $nom_client
 * @property string|null $fonction_client
 * @property string $message
 * @property string|null $photo
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
class Temoignage extends Model
{
	// use SoftDeletes;
	protected $table = 'temoignages';

	protected $casts = [
		'est_visible' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nom_client',
		'fonction_client',
		'message',
		'photo',
		'est_visible',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
