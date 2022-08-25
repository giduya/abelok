<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NetIncome extends Model
{
  protected $fillable = [
    'public_monthly_net_salary',
    'others_monthly_income',
    'industrial_activity',
    'company_name',
    'business_type',
    'financial_activity',
    'instrument_profit',
    'other_instrument_profit',
    'professional_services',
    'service_type',
    'other_income',
    'other_income_type',
    'monthly_net_income',
    'spouse_economic_dependents_monthly_net_income',
    'total_monthly_net_income',
    'clarification',
    'declaration_id',
    'disposal_of_property',
    'disposal_of_property_type'
  ];

  public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
