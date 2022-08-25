<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'other_activity',
        'owner',
        'name',
        'rfc',
        'patrimonial_regime_customer',
        'name_customer',
        'rfc_customer',
        'main_sector',
        'amount',
        'federal_entity',
        'country',
        'location',
        'declaration_id',
        'clarification'
    ];

    public function declaration()
    {
        return $this->hasOne('App\Declaration');
    }
}
