<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'type',
		'property_type',
		'location',
		'street',
		'outdoor_number',
		'interior_number',
		'postal_code',

		'colony',
		'federal_entity',
		'municipality',

		'vehicle_type',
		'brand',
		'model',
		'year',
		'serie',
		'location_registration',
		'federal_entity_registration',
		'country_registration',
		'third_party_type',
		'third_party_name',
		'third_party_rfc',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
