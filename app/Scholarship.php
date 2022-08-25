<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
	protected $table = 'scholarships';

	use SoftDeletes;

	protected $fillable = [
		'level',
		'institution',
		'career',
		'status',
		'document',
		'document_date',
		'institution_location',
		'user_id',
		'period',
		'type_period',
		'clarification',
		'declaration_id'
	];
}
