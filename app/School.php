<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];
    public function applicant(){
    	return $this->belongsTo('App\Applicant');
    }
}
