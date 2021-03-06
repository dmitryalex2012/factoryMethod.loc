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


    public function actionInterface_segregation()
    {
        return $this->render('interfaceSegregation');
    }


    public function actionDependency_inversion ()
    {
        return $this->render('dependency_inversion');
    }
}