<?php

namespace app\controllers;


use yii\web\Controller;

class NetworkController extends Controller
{
    public function actionPoster_face (){
        return $this->render('facePoster');
    }

    public function actionPoster_linked (){
        return $this->render('linkedPoster');
    }
}
