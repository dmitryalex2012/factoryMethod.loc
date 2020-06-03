<?php


namespace app\commands\solid\dependencyInversion;


class foodGetter
{
    private $foodManufacturer;

    public function __construct(IFoodProvider $foodManufacturer)
    {
        $this->foodManufacturer = $foodManufacturer;        // used binding (привязка) to abstraction
    }

    public function food()
    {
        $food = $this->foodManufacturer->getFood();

        return $food;
    }
}