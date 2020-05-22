<?php

namespace app\commands\solid\methodLiskov;

class Bird
{
    public function fly()
    {
        $flySpeed = 10;

        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 5;

        return $swimSpeed;
    }
}
