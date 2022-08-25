<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DecisionCompany extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'owner',
        'company',
        'company_rfc',
        'type_company',
        'type_company_description',
        'position',
        'start_date',
        'receive_remuneration',
        'amount',
        'location',
        'country',
        'federal_entity',
        'clarification',
        'declaration_id'
    ];

    public function declaration()
    {
        return $this->hasOne('App\Declaration');
    }
}
