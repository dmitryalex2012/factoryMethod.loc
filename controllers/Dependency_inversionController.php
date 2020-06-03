<?php

namespace app\controllers;

use app\commands\solid\dependencyInversion\foodGetter;
use app\commands\solid\dependencyInversion\Home;
use app\commands\solid\dependencyInversion\Restaurant;
use Yii;
use yii\web\Controller;

class Dependency_inversionController extends Controller
{
    public function actionFood()
    {
        $foodSelector = Yii::$app->request->post('pressedButton');

        $kitchenType = new Home();
        switch ($foodSelector) {                    // "Switch/case" allows to expand food manufacturers
            case "from restaurant":                 //              (if it will be more then 2 in future).
                $kitchenType = new Restaurant();
                break;
        }

        $myFood = new foodGetter($kitchenType);

            return $myFood->food();
    }
}