<?php
require_once(__DIR__."/vendor/autoload.php");

use App\DailyMessage\DailyStrategyGeneric;
use App\DailyMessage\DailyContext;


$sendMessage = new DailyContext();
$sendMessage->setStrategy(new DailyStrategyGeneric());
$sendMessage->executeStrategy();

