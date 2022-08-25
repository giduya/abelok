<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EconomicDependent extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'curp',
        'birth_date',
        'rfc',
        'relationship',
        'relationship_description',
        'is_strange',
        'live_same_address',
        'place_of_residence',
        'street',
        'outdoor_number',
        'interior_number',
        'suburb',
        'country',
        'city',
        'state',
        'municipality',
        'federal_entity',
        'postal_code',
        'sector',
        'main_sector',
        'description_sector',
        'level',
        'ambit',
        'institution',
        'administrative_unit',
        'company',
        'company_rfc',
        'position',
        'main_activities',
        'salary',
        'start_date',
        'is_provider',
        'clarification',
        'declaration_id'
    ];

    public function declaration()
    {
        return $this->hasOne('App\Declaration');
    }
}
