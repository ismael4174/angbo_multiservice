<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MessagesContact
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $email
 * @property string|null $sujet
 * @property string $message
 * @property Carbon|null $date_message
 * @property bool|null $lu
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @package App\Models
 */
class MessagesContact extends Model
{
	// use SoftDeletes;
	protected $table = 'messages_contact';

	protected $casts = [
		'date_message' => 'datetime',
		'lu' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nom',
		'email',
		'sujet',
		'message',
		'date_message',
		'lu',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
