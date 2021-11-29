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

    public function testBlocOf5MinutesGiven5ShouldReturn5LightsOn(){

        $berlinClock = new BerlinClockKata(03,05,00);
        $actual = $berlinClock->getBlocOf5Minutes();
        $this->assertEquals(['Y','O','O','O','O','O','O','O','O','O','O'],$actual);

    }

    public function testBlocOf5MinutesGiven10ShouldReturn10LightsOn(){

        $berlinClock = new BerlinClockKata(03,10,00);
        $actual = $berlinClock->getBlocOf5Minutes();
        $this->assertEquals(['Y','Y','O','O','O','O','O','O','O','O','O'],$actual);

    }

    public function testBlocOf5MinutesGiven15ShouldReturn15LightsOn(){

        $berlinClock = new BerlinClockKata(03,15,00);
        $actual = $berlinClock->getBlocOf5Minutes();
        $this->assertEquals(['Y','Y','R','O','O','O','O','O','O','O','O'],$actual);

    }

    public function testBlocOf5MinutesGiven20ShouldReturn20LightsOn(){

        $berlinClock = new BerlinClockKata(03,20,00);
        $actual = $berlinClock->getBlocOf5Minutes();
        $this->assertEquals(['Y','Y','R','Y','O','O','O','O','O','O','O'],$actual);

    }

    public function testSimpleHoursGiven0ShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(00,00,00);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['O','O','O','O'],$actual);

    }

    public function testSimpleHoursGiven1ShouldReturn1LightsOn(){

        $berlinClock = new BerlinClockKata(01,00,00);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['R','O','O','O'],$actual);

    }

    public function testSimpleHoursGiven2ShouldReturn2LightsOn(){

        $berlinClock = new BerlinClockKata(02,00,00);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['R','R','O','O'],$actual);

    }

    public function testSimpleHoursGiven3ShouldReturn3LightsOn(){

        $berlinClock = new BerlinClockKata(03,00,00);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['R','R','R','O'],$actual);

    }

    public function testSimpleHoursGiven4ShouldReturn4LightsOn(){

        $berlinClock = new BerlinClockKata(04,00,00);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['R','R','R','R'],$actual);

    }

    public function testSimpleHoursGiven5ShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(05,00,00);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['O','O','O','O'],$actual);

    }

    public function testBlocOf5HoursGiven0ShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(00,00,00);
        $actual = $berlinClock->getBlocOf5Hours();
        $this->assertEquals(['O','O','O','O'],$actual);

    }

    public function testBlocOf5HoursGiven5ShouldReturn1LightsOn(){

        $berlinClock = new BerlinClockKata(05,00,00);
        $actual = $berlinClock->getBlocOf5Hours();
        $this->assertEquals(['R','O','O','O'],$actual);

    }

    public function testBlocOf5HoursGiven10ShouldReturn2LightsOn(){

        $berlinClock = new BerlinClockKata(10,00,00);
        $actual = $berlinClock->getBlocOf5Hours();
        $this->assertEquals(['R','R','O','O'],$actual);

    }

    public function testBlocOf5HoursGiven15ShouldReturn3LightsOn(){

        $berlinClock = new BerlinClockKata(15,00,00);
        $actual = $berlinClock->getBlocOf5Hours();
        $this->assertEquals(['R','R','R','O'],$actual);

    }

    public function testBlocOf5HoursGiven20ShouldReturn4LightsOn(){

        $berlinClock = new BerlinClockKata(20,00,00);
        $actual = $berlinClock->getBlocOf5Hours();
        $this->assertEquals(['R','R','R','R'],$actual);

    }

    public function testSecondsGiven0ShouldReturn1LightsOn(){

        $berlinClock = new BerlinClockKata(20,00,00);
        $actual = $berlinClock->getSeconds();
        $this->assertEquals(['Y'],$actual);

    }

    public function testSecondsGiven1ShouldReturn0LightsOn(){

        $berlinClock = new BerlinClockKata(20,00,01);
        $actual = $berlinClock->getSeconds();
        $this->assertEquals(['O'],$actual);

    }
    public function testSecondsGiven2ShouldReturn1LightsOn(){

        $berlinClock = new BerlinClockKata(20,00,02);
        $actual = $berlinClock->getSeconds();
        $this->assertEquals(['Y'],$actual);

    }



}
