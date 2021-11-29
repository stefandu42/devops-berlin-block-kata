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

        $rest = $this->hours%5;
        $tabSimpleHours = ['O','O','O','O'];
        for($i=0;$i<$rest;$i++){
            $tabSimpleHours[$i]='R';
        }
        return $tabSimpleHours;
    }

    public function getBlocOf5Hours()
    {
        if($this->hours === 5) return ['R','O','O','O'];
        return ['O','O','O','O'];
    }
}