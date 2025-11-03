<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @property int $id
 * @property string $nom
 * @property string|null $description
 * @property string|null $slug
 * @property int|null $service_id
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property Service|null $service
 *
 * @package App\Models
 */
class Category extends Model
{
	// use SoftDeletes;
	protected $table = 'categories';

	protected $casts = [
		'service_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nom',
		'description',
		'slug',
		'service_id',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function service()
	{
		return $this->belongsTo(Service::class);
	}
}
