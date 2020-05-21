<?php

namespace app\controllers;

use yii\web\Controller;
use app\commands\solid\Calculation;
use app\commands\solid\TakeDigits;


class ExecutionController extends Controller
{
    public function actionSingle()
    {
        $takeDigits = new TakeDigits();                     // get data, that VIEW send

        $newClass = "SRLogger";
        $calculation = new Calculation($newClass);
        $result = $calculation->calculateSingle($takeDigits->takeFirstDigit(), $takeDigits->takeSecondDigit(), $takeDigits->takeSign());

        return $result;
    }


    public function actionOpen()
    {
        $takeDigits = new TakeDigits();

        $typeLogger = "FileLogger";
        if (($takeDigits->takeStoragePointer()) === "DB"){  // check the storage place for result
            $typeLogger = "DBLogger";
        }
        $calculation = new Calculation($typeLogger);
        $result = $calculation->calculateOpen($takeDigits->takeFirstDigit(), $takeDigits->takeSecondDigit(), $takeDigits->takeSign());
//                          http://127.0.0.1/openserver/phpmyadmin/index.php
        return $result;
    }

}
