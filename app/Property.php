<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
  use SoftDeletes;

  protected $table = 'properties';

  protected $fillable = [
    'property_type',
    'other_property_type',
    'property_owner',
    'ownership_percentage',
    'land_surface',
    'building_surface',
    'third_type',
    'third_name',
    'third_rfc',
    'acquisition_type',
    'payment_type',
    'transmitter_type',
    'transmitter_name',
    'transmiter_rfc',
    'transmitter_relationship',
    'other_transmitter_relationship',
    'acquisition_value',
    'acquisition_value_type',
    'currency_type',
    'acquisition_date',
    'public_registry_data',
    'property_location',
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
    'clarification',
    'property_leave',
    'other_property_leave',
    'reason_property_leave',
    'clarification',
    'declaration_id'
  ];
}
