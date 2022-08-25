<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Node extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'subdomain',
        'logo',
        'start_date_initial',
        'end_date_initial',
        'start_date_modification',
        'end_date_modification',
        'start_date_conclusion',
        'end_date_conclusion',
        'state_id',
        'municipality_id',
        'role'
    ];

    public function municipality()
    {
        return $this->belongsTo('App\Municipality');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function users()
    {
        return $this->hasMany('App\User')->where('type', 'operational');
    }
    public function declarants()
    {
        return $this->hasMany('App\User');
    }
}
