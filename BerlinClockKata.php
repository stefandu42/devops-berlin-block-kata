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
        $q = floor($this->minutes / 5);
        $tabMinutesBloc = ['O','O','O','O','O','O','O','O','O','O','O'];
        for($i=0;$i<$q;$i++){
            if(($i+1)%3 != 0) {
                $tabMinutesBloc[$i] = 'Y';
            }
            else{
                $tabMinutesBloc[$i] = 'R';
            }
        }
        return $tabMinutesBloc;
    }

    public function getSimpleHours()
    {

        $tabSimpleHours = ['O','O','O','O'];
        if($this->hours===5) return $tabSimpleHours;
        for($i=0;$i<$this->hours;$i++){
            $tabSimpleHours[$i]='R';
        }
        return $tabSimpleHours;
    }
}