<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domicile extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'declaration_id',
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
    'clarification'
  ];

  public function declaration(){
    return $this->hasOne('App\Declaration');
  }
}
