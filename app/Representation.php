<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
	protected $fillable = [
		'owner',
		'type',
		'patrimonial_regime',
		'start_date',
		'name',
		'rfc',
		'receive_remuneration',
		'location',
		'main_sector',
		'clarification',
		'amount',
		'location',
		'federal_entity',
		'country',
		'main_sector',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
