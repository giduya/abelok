<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function nodes()
    {
        return $this->hasMany('App\Node');
    }
}
