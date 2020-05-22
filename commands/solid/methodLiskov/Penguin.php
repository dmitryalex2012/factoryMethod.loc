<?php

namespace app\commands\solid\methodLiskov;


class Penguin extends Bird
{
    public function fly()
    {
        $flySpeed = "error";

        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 15;

        return $swimSpeed;
    }
}