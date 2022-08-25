<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employment extends Model
{
  use SoftDeletes;

  protected $fillable = [
    "declaration_id",
    "government_level",
    "public_ambit",
    "public_entity",
    "ascription_area",
    "employment",
    "fee",
    "employment_level",
    "principal_function",
    "entry_date",
    "office_phone",
    "office_phone_extension",
    "location",
    "street",
    "outdoor_number",
    "interior_number",
    "colony",
    "municipality",
    "federal_entity",
    "city",
    "state",
    "country",
    "postal_code",
    "clarification",
  ];

  public function declaration()
  {
      return $this->hasOne('App\Declaration');
  }
}
