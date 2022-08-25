<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Declaration extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'type',
        'target_date',
        'status',
        'user_id',
        'current_section',
        'tracking',
        'sign_date'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function generaldata(){
        return $this->hasOne('App\GeneralData');
    }

    public function domicile(){
        return $this->hasOne('App\Domicile');
    }

    public function scholarships(){
        return $this->hasMany('App\Scholarship');
    }

    public function employment(){
      return $this->hasOne('App\Employment');
    }

    public function public_official(){
        return $this->hasOne('App\PublicOfficial');
    }

    public function work_experiences(){
        return $this->hasMany('App\WorkExperience');
    }

    public function spouse_data() {
      return $this->hasOne('App\SpouseData');
    }

    public function economic_dependents(){
        return $this->hasMany('App\EconomicDependent');
    }

    public function net_income() {
      return $this->hasOne('App\NetIncome');
    }

    public function properties() {
      return $this->hasMany('App\Property');
    }

    public function vehicles(){
        return $this->hasMany('App\Vehicle');
    }

    public function movable_properties() {
      return $this->hasMany('App\MovableProperty');
    }

    public function investments(){
        return $this->hasMany('App\Investment');
    }

    public function debts() {
      return $this->hasMany('App\Debts');
    }

    public function loans(){
        return $this->hasMany('App\Loan');
    }

    public function participation_companies(){
        return $this->hasMany('App\ParticipationCompany');
    }

    public function decision_companies(){
        return $this->hasMany('App\DecisionCompany');
    }

    public function public_supports(){
        return $this->hasMany('App\PublicSupport');
    }

    public function representations(){
        return $this->hasMany('App\Representation');
    }

    public function customers(){
        return $this->hasMany('App\Customer');
    }

    public function private_benefits(){
        return $this->hasMany('App\PrivateBenefit');
    }

    public function trusts(){
        return $this->hasMany('App\Trust');
    }

    public function clarifications(){
      return $this->hasMany('App\Clarification');
  }
}
