<?php

namespace app\controllers;

use yii\web\Controller;


class IspController extends Controller
{
    public function actionParameters()
    {
//        $selectedBird = Yii::$app->request->post('selectedBird');

//        $birdType = new Duck();   // "$birdType might have not been defined" will appear without determination "$birdType" before "switch"
//        switch ($selectedBird){
//            case "Duck":    $birdType = new Duck();     break;
//            case "Penguin": $birdType = new Penguin();  break;
//            case "Eagle":   $birdType = new Eagle();    break;
//        }
//
//        $newBird = new TakeParameters($birdType);
//        $result = $newBird->takeParameters();

//        $result = json_encode($result);

//        return $result;
        return "ok";
    }
}