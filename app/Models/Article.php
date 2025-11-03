<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 *
 * @property int $id
 * @property string $titre
 * @property string|null $contenu
 * @property string|null $image_couverture
 * @property string|null $slug
 * @property int|null $auteur_id
 * @property bool|null $est_actif
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property Administrateur|null $administrateur
 *
 * @package App\Models
 */
class Article extends Model
{
	// use SoftDeletes;
	protected $table = 'articles';

	protected $casts = [
		'auteur_id' => 'int',
		'est_actif' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'titre',
		'contenu',
		'image_couverture',
		'slug',
		'auteur_id',
		'est_actif',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function administrateur()
	{
		return $this->belongsTo(Administrateur::class, 'auteur_id');
	}
}
