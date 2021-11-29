<?php

require 'BerlinClockKata.php';
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{

    // TEST SIMPLE MINUTES

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

    public function testSimpleMinutesGiven3ShouldReturn3LightsOn(){

        $berlinClock = new BerlinClockKata(03,03,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['Y','Y','Y','O'],$actual);

    }

    public function testSimpleMinutesGiven4ShouldReturn4LightsOn(){

        $berlinClock = new BerlinClockKata(03,04,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['Y','Y','Y','Y'],$actual);

    }

    public function testSimpleMinutesGiven5ShouldReturn5LightsOn(){

        $berlinClock = new BerlinClockKata(03,05,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['O','O','O','O'],$actual);

    }

    public function testSimpleMinutesGiven6ShouldReturn6LightsOn(){

        $berlinClock = new BerlinClockKata(03,06,00);
        $actual = $berlinClock->getSimpleMinutes();
        $this->assertEquals(['Y','O','O','O'],$actual);

    }

    // TEST BLOC MINUTES

    public function testBlocOf5MinutesGiven0ShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(03,00,00);
        $actual = $berlinClock->getBlocOf5Minutes();
        $this->assertEquals(['O','O','O','O','O','O','O','O','O','O','O'],$actual);

    }



}
