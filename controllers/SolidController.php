<?php

namespace app\controllers;

use yii\web\Controller;


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

    public function actionLiskov()
    {
        return $this->render('liskov');
    }
}