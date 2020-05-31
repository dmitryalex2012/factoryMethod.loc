<?php

namespace app\controllers;

use app\commands\solid\interfaceSegregation\SuperTransformer;
use Yii;
use yii\web\Controller;

use app\commands\solid\interfaceSegregation\PlaneTransformer;
use app\commands\solid\interfaceSegregation\CarTransformer;
use app\commands\solid\interfaceSegregation\ShipTransformer;


class IspController extends Controller
{
    public function actionParameters()
    {
        $transformerParameters = Yii::$app->request->post('transformType');     // get the transformer type

        $result = "No transformer";
        switch ($transformerParameters) {
            case "Plane transformer":
                $result = PlaneTransformer::toPlane();
                break;
            case "Car transformer":
                $result = CarTransformer::toCar();
                break;
            case "Ship transformer":
                $result = ShipTransformer::toShip();
                break;
            case "Super transformer":
                $result = SuperTransformer::toPlane() . " + " . SuperTransformer::toCar() . " + " . SuperTransformer::toShip();
                break;
        }

        return $result;
    }
}