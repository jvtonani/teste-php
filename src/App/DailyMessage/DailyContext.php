<?php

namespace App\DailyMessage;

class DailyContext {
    private DailyStrategyI $strategy;

    public function setStrategy (DailyStrategyI $strategy) 
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy() 
    {
        $this->strategy->execute();
    }
}