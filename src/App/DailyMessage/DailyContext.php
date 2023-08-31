<?php

namespace App\DailyMessage;

class DailyContext {
    private DailyStrategyI $strategy;

    public function setStrategy (DailyStrategyI $strategy) 
    {
        try {
            $this->strategy = $strategy;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function executeStrategy() 
    {
        $this->strategy->execute();
    }
}