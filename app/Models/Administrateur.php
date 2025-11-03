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
 * Class Administrateur
 * 
 * @property int $id
 * @property string $nom
 * @property string $email
 * @property string $mot_de_passe
 * @property string|null $role
 * @property string|null $avatar
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 * 
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class Administrateur extends Model
{
	use SoftDeletes;
	protected $table = 'administrateurs';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'nom',
		'email',
		'mot_de_passe',
		'role',
		'avatar',
		'remember_token',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function articles()
	{
		return $this->hasMany(Article::class, 'auteur_id');
	}
}
