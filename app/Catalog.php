<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description'
    ];

    public function options()
    {
        return $this->hasMany('App\CatalogOption', 'id', 'catalog_id');
    }
}
