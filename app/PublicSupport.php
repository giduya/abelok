<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublicSupport extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'beneficiary',
		'name_program',
		'institution',
		'government_level',
		'type_benefit',
		'type_reception',
		'amount',
		'description_beneficiary',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
