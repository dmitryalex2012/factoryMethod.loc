<?php

namespace app\commands\solid\interfaceSegregation;

class PlaneTransformer implements IPlaneTransformer
{
    public static function toPlane()
    {
        return "Transform to plane";
    }
}
