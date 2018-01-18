<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = [];
    public function applicant(){
    	return $this->belongsTo('App\Applicant');
    }
}
