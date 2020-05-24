<?php

namespace app\controllers;

use app\commands\solid\methodLiskov\Duck;
use app\commands\solid\methodLiskov\Eagle;
use app\commands\solid\methodLiskov\Penguin;
use app\commands\solid\methodLiskov\TakeParameters;
use yii\web\Controller;
use Yii;


class LiskovController extends Controller
{
    public function actionParameters()
    {
        $selectedBird = Yii::$app->request->post('selectedBird');

        $birdType = new Duck();   // "$birdType might have not been defined" will appear without determination "$birdType" before "switch"
        switch ($selectedBird){
            case "Duck":    $birdType = new Duck();     break;
            case "Penguin": $birdType = new Penguin();  break;
            case "Eagle":   $birdType = new Eagle();    break;
        }

        $newBird = new TakeParameters($birdType);
        $result = $newBird->takeParameters();

        $result = json_encode($result);

        return $result;
    }
}