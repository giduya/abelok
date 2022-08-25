<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\UserTypes;
use App\UserRoles;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'homoclave',
        'name',
        'firstname',
        'lastname',
        'password',
        'type',
        'node_id',
        'rol',
        'level',
        'declarant_type',
        'status'
      ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function declarations()
    {
        return $this->hasMany('App\Declaration')->orderBy('id', 'DESC');
    }

    public function current_declaration()
    {
        return $this->hasMany('App\Declaration')->first();
    }

    public function node() {
        return $this->belongsTo('App\Node');
    }

    public function isAdmin()
    {
      return $this->type == UserTypes::ADMIN;
    }

    public function isOperational()
    {
      return $this->type == UserTypes::OPERATIONAL;
    }

    public function isDeclarant()
    {
      return $this->type == UserTypes::DECLARANT;
    }

    public function isComptroller()
    {
      return $this->rol == UserRoles::COMPTROLLER;
    }

    public function isSecretary()
    {
      return $this->rol == UserRoles::SECRETARY;
    }

    public function isHR()
    {
      return $this->rol == UserRoles::HR;
    }
}
