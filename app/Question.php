<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    /**
     * Relationships
     * belongsTo -> Many to one
     * belongstoMany -> Many to many
     * hasMany -> One to many
     * hasOne -> One to one
     */

    protected $fillable = [
        'index',
        'type',
        'content',
        'catalog_id',
        'parent_id',
        'status',
        'required',
        'prop_linked',
        'description',
        'disabled',
        'is_parent',
        'columns',
        'is_private',
        'min',
        'max'
    ];

    // default attributes values
    protected $attributes = [
        'type' => 'TextWidget',
        'status' => 'active',
        'required' => 0
    ];

    public function sections(){
        // return $this->belongsTo('App\Section');
        return $this->belongsToMany('App\Section', 'section_question', 'section_id', 'question_id');

    }

    public function conditions(){
        return $this->hasMany('App\Condition');
    }

    public function catalogs(){
        return $this->hasMany('App\Catalog');
    }

    public function questions(){
        return $this->hasMany('App\Question',
        'parent_id',
        'id')->orderBy('index',
        'ASC');
    }

    public function userDeclarations(){
        return $this->belongsTo('App\UserDeclaration');
    }
}
