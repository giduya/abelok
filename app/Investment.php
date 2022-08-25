<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investment extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'type',
		'type_description',
		'number_document',
		'owner',
		'location_investment',
		'institution',
		'rfc',
		'balance',
		'currency',
		'third_party_type',
		'third_party_name',
		'third_party_rfc',
		'country_investment',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
