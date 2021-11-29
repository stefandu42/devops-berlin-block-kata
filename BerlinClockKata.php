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

        $toReturn = ["O","O","O","O"];
        for($i=0;$i<$this->minutes;$i++){
            $toReturn[$i]="Y";
        }
        return $toReturn;
    }
}