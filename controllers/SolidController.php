<?php

namespace app\controllers;


use yii\web\Controller;

class SolidController extends Controller
{
    public function actionSingle_responsibility()
    {
        return $this->render('singleResponsibility');
    }

    public function actionExecution()
    {
        $myresult = 5;
        return $myresult;
    }
}
