<?php

require 'BerlinClockKata.php';
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function testSimpleMinutesGiven0ShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(03,00,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['O','O','O','O'],$actual);

    }

    public function testSimpleMinutesGiven1ShouldReturn1LightsOn(){

        $berlinClock = new BerlinClockKata(13,01,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['Y','O','O','O'],$actual);

    }

    public function testSimpleMinutesGiven2ShouldReturn2LightsOn(){

        $berlinClock = new BerlinClockKata(03,02,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['Y','Y','O','O'],$actual);

    }



}