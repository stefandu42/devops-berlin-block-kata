<?php

class BerlinClockKata
{
    private $hours;
    private $minutes;
    private $seconds;

    public function __construct($hours, $minutes, $seconds){
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }

    public function getSimpleMinutes(){
        if($this->minutes===1) return ["Y","O","O","O"];
        if($this->minutes===2) return ["Y","Y","O","O"];
        return ["O","O","O","O"];
    }
}