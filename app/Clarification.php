<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clarification extends Model
{

  protected $fillable =
	[
    'clarification',
		'declaration_id'
  ];

  public function declaration()
	{
		return $this->hasOne('App\Declaration');
	}
}
