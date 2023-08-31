<?php

namespace App\DailyMessage;
use App\DailyMessage\MondayStrategy;
class WeekDay 
{
    private $days;
    
    public function __construct() {
        $this->setDays();
    }
    private function setDays () {
        $this->days = [
            'monday' => new MondayStrategy(),
            //TODO Adicionar dias da semana
        ];
    } 

    public function getWeekStrategy($day) {
        return $this->days[$day];
    }


    private function verifyHolidayRule($day) {
        //TODO Adicionar validação
        return true;
    }

    
}