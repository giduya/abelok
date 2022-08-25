<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'index', 'declaration_type'
    ];

    public function questions()
    {
        return $this->belongsToMany('App\Question', 'section_question', 'section_id', 'question_id');

    }
}
