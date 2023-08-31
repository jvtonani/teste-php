<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\DailyMessage\WeekDay;

class WeekDayTest extends TestCase
{
    public function hasMondayDay(): void
    {
        $dayOfWeek = 'monday';
        $dayOfWeek = new WeekDay();
        $dayOfWeek->getWeekStrategy($dayOfWeek);
        $this->assertIsObject($dayOfWeek->getWeekStrategy($dayOfWeek));
    }

}
