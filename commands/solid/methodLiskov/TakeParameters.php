<?php

namespace app\commands\solid\methodLiskov;


class TakeParameters
{
    public $file;
    public $flySpeed;
    public $swimSpeed;

    public function __construct(Bird $argument)
    {
        $this->file = $argument;
    }

    public function takeParameters(){
        $this->flySpeed = $this->file->fly();
        $this->swimSpeed = $this->file->swim();

        return [
            'flySpeed'  => $this->flySpeed,
            'swimSpeed' => $this->swimSpeed
        ];
//        return $this->swimSpeed;
    }
}

