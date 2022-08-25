<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParticipationCompany extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'owner',
		'company',
		'company_rfc',
		'percentage',
		'type_participacion',
		'description_type_participacion',
		'main_sector',
		'description_sector',
		'receive_remuneration',
		'amount',
		'location',
		'country',
		'federal_entity',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
