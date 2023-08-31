<?php

namespace App\DailyMessage;
require_once("DailyStrategyI.php");

class DailyStrategyGeneric implements DailyStrategyI {

    public function execute() : void 
    {
        echo "Mensagem dia semana genérico";
    }
}