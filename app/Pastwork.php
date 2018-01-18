<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastwork extends Model
{
    protected $guarded = [];
    public function applicant(){
    	return $this->belongsTo('App\Applicant');
    }
}
