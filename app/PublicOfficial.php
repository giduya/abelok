<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublicOfficial extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'ex_public_official',
		'start_date',
		'end_date',
		'salary',
		'activity_income',
		'rfc',
		'sector',
		'financial_income',
		'financial_tool',
		'professional_income',
		'professional_description',
		'sales_property',
		'sales_property_description',
		'other_activities_income',
		'dependents_income',
		'total_income',
		'sum_total_income',
		'clarification',
		'declaration_id'
	];

	public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
