<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Availability extends Model
{
    protected $guarded = [];
    public static function availabilityHours($intervalMinutes)
    {
    	$hours = array();
        $minutes = $intervalMinutes;
        $dt = Carbon::now()->startOfDay();
        $hours[$dt->toTimeString()] = $dt->format('H:i');
        $interval = 60 * 24 / $minutes;
        for($i = 0; $i < $interval; $i++){
            $dt->addMinutes($minutes);
            $hours[$dt->toTimeString()] = $dt->format('H:i');
        }
        $hours['24:00:00'] = '24:00';
        return $hours;
    }
}
