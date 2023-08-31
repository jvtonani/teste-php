<?php
require_once(__DIR__."/vendor/autoload.php");

use App\DailyMessage\DailyContext;
use App\DailyMessage\WeekDay;

$sendMessage = new DailyContext();
$dayOfWeek = new WeekDay();
$sendMessage->setStrategy($dayOfWeek->getWeekStrategy('monday'));
$sendMessage->executeStrategy();

