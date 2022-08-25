<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trust extends Model
{
	protected $fillable = [
		'owner',
		'regime',
		'type',
		'rfc',
		'type_participation',
		'regime_trustor_type',
		'trustor_name',
		'trustor_rfc',
		'main_sector',
		'location',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
