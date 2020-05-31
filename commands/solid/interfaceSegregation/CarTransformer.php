<?php

namespace app\commands\solid\interfaceSegregation;

class CarTransformer implements ICarTransformer
{
    public static function toCar()
    {
        return "Transform to car";
    }
}
