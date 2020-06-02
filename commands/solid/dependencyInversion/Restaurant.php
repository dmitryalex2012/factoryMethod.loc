<?php

namespace app\commands\solid\dependencyInversion;

class Restaurant implements IFoodProvider
{
    public function getFood()
    {
         return "Food from restaurant";
    }
}
