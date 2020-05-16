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
        return $this->render('singleResponsibility',[
            'selectorSOLID'=>"single"
        ]);
    }

    public function actionOpen_closed()
    {
        return $this->render('singleResponsibility',[
            'selectorSOLID'=>"open"
            ]);
    }

//    protected function takeTransmittedParameters(){
//
//    }

    public function actionExecution_single()
    {
        $firstDigit = Yii::$app->request->post('firstDigit');
        $secondDigit = Yii::$app->request->post('secondDigit');
        $sign = Yii::$app->request->post('sign');

        $newClass = new Logger();
        $calculation = new Calculation($newClass);
        $result = $calculation->calculateSingle($firstDigit, $secondDigit, $sign);

        return $result;
    }

    public function actionExecution_open()
    {
        $firstDigit = Yii::$app->request->post('firstDigit');
        $secondDigit = Yii::$app->request->post('secondDigit');
        $sign = Yii::$app->request->post('sign');

        $newClass = new Logger();
        $calculation = new Calculation($newClass);
        $result = $calculation->calculateOpen($firstDigit, $secondDigit, $sign);

        return $result;
    }

}
