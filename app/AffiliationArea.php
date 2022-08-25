<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AffiliationArea extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'value', 
    'label',
    'description',
    'node_id'
  ];

  public function node() {
    return $this->belongsTo('App\Node', 'node_id', 'id');
  }
}
