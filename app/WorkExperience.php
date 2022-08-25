<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkExperience extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'sector',
		'level',
		'ambit',
		'institution',
		'administrative_unit',
		'rfc',
		'company',
		'area',
		'position',
		'main_activities',
		'main_sector',
		'location',
		'start_date',
		'end_date',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
