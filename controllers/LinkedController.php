<?php

namespace app\controllers;

use yii\web\Controller;

class LinkedController extends Controller
{
    public function actionPoster_linked (){
        return $this->render('linkedPoster');
    }
}
