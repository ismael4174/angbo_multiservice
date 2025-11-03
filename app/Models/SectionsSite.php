<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SectionsSite
 * 
 * @property int $id
 * @property string $cle
 * @property string $titre
 * @property string|null $contenu
 * @property string|null $image
 * @property bool|null $est_actif
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @package App\Models
 */
class SectionsSite extends Model
{
	use SoftDeletes;
	protected $table = 'sections_site';

	protected $casts = [
		'est_actif' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'cle',
		'titre',
		'contenu',
		'image',
		'est_actif',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
