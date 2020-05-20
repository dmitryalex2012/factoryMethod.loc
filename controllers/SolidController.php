<?php

namespace app\controllers;

use yii\web\Controller;
use app\commands\solid\Calculation;
use app\commands\solid\TakeDigits;


class SolidController extends Controller
{
    public function actionSingle_responsibility()
    {
        return $this->render('singleResponsibility', [
            'selectorSOLID' => "single"
        ]);
    }


    public function actionOpen_closed()
    {
        return $this->render('singleResponsibility', [
            'selectorSOLID' => "open"
        ]);
    }


    public function actionExecution_single()
    {
        $takeDigits = new TakeDigits();     // get data, that VIEW send

        $newClass = "SRLogger";
        $calculation = new Calculation($newClass);
        $result = $calculation->calculateSingle($takeDigits->takeFirstDigit(), $takeDigits->takeSecondDigit(), $takeDigits->takeSign());

        return $result;
    }


    public function actionExecution_open()
    {
        $takeDigits = new TakeDigits();

        $typeLogger = "FileLogger";
        if (($takeDigits->takeStoragePointer()) === "DB"){
            $typeLogger = "DBLogger";
        }
        $calculation = new Calculation($typeLogger);
        $result = $calculation->calculateOpen($takeDigits->takeFirstDigit(), $takeDigits->takeSecondDigit(), $takeDigits->takeSign());
//        http://127.0.0.1/openserver/phpmyadmin/index.php

        return $result;
    }

}
