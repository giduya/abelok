<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovableProperty extends Model
{
  use SoftDeletes;

  protected $table = 'movable_properties';

  protected $fillable = [
    'owner',
    'type',
    'other_type',
    'transmitter_type',
    'transmitter_name',
    'transmiter_rfc',
    'transmitter_relationship',
    'other_transmitter_relationship',
    'third_type',
    'third_name',
    'third_rfc',
    'description',
    'acquisition_type',
    'payment_type',
    'acquisition_value',
    'currency_type',
    'acquisition_date',
    'property_leave',
    'other_property_leave',
    'reason_property_leave',
    'clarification',
    'declaration_id'
  ];
}
