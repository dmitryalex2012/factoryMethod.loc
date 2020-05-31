<?php

namespace app\commands\solid\interfaceSegregation;

class SuperTransformer implements IPlaneTransformer, ICarTransformer, IShipTransformer
{
    public static function toPlane()
    {
        return "Transform to plane";
    }


    public static function toCar()
    {
        return "Transform to car";
    }


    public static function toShip()
    {
        return "Transform to ship";
    }
}
