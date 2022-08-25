<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDeclaration extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'question_id', 'value', 'declaration_id'
    ];
}


