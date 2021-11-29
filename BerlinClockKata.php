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
        $rest = $this->minutes%5;
        $toReturn = ["O","O","O","O"];
        for($i=0;$i<$rest;$i++){
            $toReturn[$i]="Y";
        }
        return $toReturn;
    }

    public function getBlocOf5Minutes(){
        if($this->minutes === 5) return ['Y','O','O','O','O','O','O','O','O','O','O'];
        else if($this->minutes === 10) return ['Y','Y','O','O','O','O','O','O','O','O','O'];
        return ['O','O','O','O','O','O','O','O','O','O','O'];
    }
}