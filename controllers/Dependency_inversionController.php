<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\commands\solid\dependencyInversion\Home;
use app\commands\solid\dependencyInversion\Restaurant;

class Dependency_inversionController extends Controller
{
    public function actionFood()
    {
        $foodSelector = Yii::$app->request->post('pressedButton');

        $kitchenType = "";
        switch ($foodSelector) {
            case "from home":
                $kitchenType = new Home();
                break;
            case "from restaurant":
                $kitchenType = new Restaurant();
                break;
        }

        return $kitchenType;
    }
}