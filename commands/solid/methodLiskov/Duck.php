<?php

namespace app\commands\solid\methodLiskov;


class Duck extends Bird
{
    public function fly()
    {
        $flySpeed = 15;

        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 10;

        return $swimSpeed;
    }
}