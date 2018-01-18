<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = [];
    public function position(){
    	return $this->hasOne('App\Position');
    }

    public function school(){
    	return $this->hasOne('App\School');
    }
    public function pastwork(){
    	return $this->hasOne('App\Pastwork');
    }
}
