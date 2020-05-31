<?php

namespace app\commands\solid\interfaceSegregation;

class ShipTransformer implements IShipTransformer
{
    public static function toShip()
    {
        return "Transform to ship";
    }
}
