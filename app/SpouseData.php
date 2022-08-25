<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpouseData extends Model
{
  protected $fillable = [
    'name',
    'firstname',
    'lastname',
    'birth_date',
    'rfc',
    'relationship',
    'foreign_citizen',
    'resides_place',
    'declarant_address',
    'economic_dependent',
    'location',
    'street',
    'outdoor_number',
    'interior_number',
    'colony',
    'municipality',
    'federal_entity',
    'city',
    'state',
    'country',
    'postal_code',
    'work_activity',
    'government_level',
    'public_ambit',
    'public_entity',
    'ascription_area',
    'employment',
    'principal_function',
    'monthly_salary',
    'entry_date',
    'company_name',
    'position',
    'company_rfc',
    'company_entry_date',
    'private_montly_salary',
    'private_sector',
    'government_supplier',
    'private_sector',
    'clarification',
    'declaration_id',
  ];

  public function declaration()
  {
    return $this->hasOne('App\Declaration');
  }
}
