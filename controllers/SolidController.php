<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\commands\single_responsibility\Logger;
use app\commands\single_responsibility\Calculation;

class SolidController extends Controller
{
    public function actionSingle_responsibility()
    {
        return $this->render('singleResponsibility');
    }

    public function actionExecution()
    {
        $firstDigit = Yii::$app->request->post('firstDigit');
        $secondDigit = Yii::$app->request->post('secondDigit');
        $sign = Yii::$app->request->post('sign');
        $temp = [$firstDigit, $secondDigit, $sign];
        $temp = json_encode($temp);

        $newClass = new Logger();
        $file = "rezults.txt";

        $calculation = new Calculation();
        if ($secondDigit != 0){
            $result = $calculation->calculate($firstDigit, $secondDigit, $sign);
        } else{
            $result = "devision on zero";
        }

        $newClass->saveToFile($file, $temp);

        return $result;
//        return $this->render('temp',
//            ['temp' => $temp
//            ]);
    }
}
