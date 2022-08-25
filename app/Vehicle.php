<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
	use SoftDeletes;

	protected $fillable =
	[
		'type',
		'owner',
		'property_transmitter',
		'transmitter_name',
		'transmitter_rfc',
		'transmitter_relationship',
		'transmitter_relationship_description',
		'brand',
		'model',
		'year',
		'serie',
		'location_registration',
		'acquisition_type',
		'payment_method',
		'acquisition_value',
		'currency',
		'acquisition_date',
		'acquisition_status',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
