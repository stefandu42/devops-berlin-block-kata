<?php

require 'BerlinClockKata.php';
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function testSimpleMinutesShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(03,35,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['O','O','O','O'],$actual);

    }
}
