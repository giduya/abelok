<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Debts extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'owner',
    'type',
    'other_type',
    'contract_number',
    'debt_date',
    'original_amount',
    'currency',
    'balance',
    'third_type',
    'third_name',
    'third_rfc',
    'credit_grantor',
    'grantor_name',
    'grantor_rfc',
    'debt_location',
    'country',
    'clarification',
    'declaration_id'
  ];

  public function declaration(){
    return $this->hasOne('App\Declaration');
  }
}
