<?php

use App\DailyMessage\DailyStrategyGeneric;
class WeekDay 
{
    private $days;
    public function setDays () {
        $this->days = [
            'segunda' => new DailyStrategyGeneric()
        ];
    } 

    
}