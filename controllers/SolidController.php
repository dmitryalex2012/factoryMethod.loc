<?php

namespace app\controllers;


use yii\web\Controller;
use Yii;

class SolidController extends Controller
{
    public function actionSingle_responsibility()
    {
        return $this->render('singleResponsibility');
    }

    public function actionExecution()
    {
        $temp = Yii::$app->request->post('sign');

        return $temp;
    }
}
