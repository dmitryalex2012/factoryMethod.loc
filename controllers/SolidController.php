<?php

namespace app\controllers;

use yii\web\Controller;
use app\commands\solid\Calculation;
use app\commands\solid\TakeDigits;
use app\commands\solid\singleResponsibility\SRLogger;
use app\commands\solid\openClosed\FileLogger;
use app\commands\solid\openClosed\DBLogger;


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
//        $takeDigits = new TakeDigits();     // get data, that VIEW send
//
//        $newClass = new SRLogger();
//        $calculation = new Calculation($newClass);
//        $result = $calculation->calculateSingle($takeDigits->takeFirstDigit(), $takeDigits->takeSecondDigit(), $takeDigits->takeSign());
//
//        return $result;
        return 5;
    }


    public function actionExecution_open()
    {
        $takeDigits = new TakeDigits();

//        $abstractClass = new FileLogger();
//        if (($takeDigits->takeStoragePointer()) === "DB"){
//            $abstractClass = new DBLogger();
//        }
//        $calculation = new Calculation($abstractClass);

                    $calculation = new Calculation();

        $result = $calculation->calculateOpen($takeDigits->takeFirstDigit(), $takeDigits->takeSecondDigit(),
                                                    $takeDigits->takeSign(), $takeDigits->takeStoragePointer());
        return $result;
//        return 5;
    }

}
