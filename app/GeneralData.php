<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneralData extends Model
{
	use SoftDeletes;

	protected $table = "general_data";
	protected $fillable = [
		"name",
		"firstname",
		"lastname",
		"curp",
		"rfc",
		"homoclave",
		"email",
		"email_2",
		"phone",
		"phone_2",
		"civil_status",
		"patrimonial_regime",
		"country_of_birth",
		"nationality",
		"clarification",
		"declaration_id",
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
