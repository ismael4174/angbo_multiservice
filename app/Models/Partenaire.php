<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Partenaire
 *
 * @property int $id
 * @property string $nom
 * @property string|null $logo
 * @property string|null $lien_site
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
class Partenaire extends Model
{
	// use SoftDeletes;
	protected $table = 'partenaires';

	protected $casts = [
		'est_visible' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nom',
		'logo',
		'lien_site',
		'est_visible',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
