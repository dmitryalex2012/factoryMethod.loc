<?php

namespace app\commands\solid\dependencyInversion;

class Home implements IFoodProvider
{
    public function getFood()
    {
        return "Food from home";
    }
}
