<?php

namespace app\commands\solid;
use Yii;

class TakeDigits
{
    public function takeFirstDigit (){
        return $firstDigit = Yii::$app->request->post('firstDigit');
    }

    public function takeSecondDigit (){
        return $secondDigit = Yii::$app->request->post('secondDigit');
    }

    public function takeSign (){
        return $sign = Yii::$app->request->post('sign');
    }

    public function takeStoragePointer (){
        return $sign = Yii::$app->request->post('storagePointer');
    }
}
