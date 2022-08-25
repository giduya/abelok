<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateBenefit extends Model
{
    protected $fillable = [
        'beneficiary',
        'type',
        'granting_type',
        'granting_name',
        'granting_rfc',
        'type_reception',
        'description_reception',
        'amount',
        'currency',
        'main_sector',
        'description_sector',
        'clarification',
        'declaration_id'
    ];

    public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
