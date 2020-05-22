<?php

namespace app\commands\solid\methodLiskov;


class Eagle extends Bird
{
    public function fly()
    {
        $flySpeed = 30;

        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = "error";

        return $swimSpeed;
    }
}