<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = [
        'visible',
        'condition_value',
        'operator',
        'question_id',
    ];
}