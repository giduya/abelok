<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatalogOption extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'value', 'label', 'catalog_id'
    ];

    public function catalog()
    {
        return $this->belongsTo('App\Catalog', 'catalog_id', 'id');
    }
}
