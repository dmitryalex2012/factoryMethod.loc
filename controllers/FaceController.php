<?php

namespace app\controllers;


use yii\web\Controller;

class FaceController extends Controller
{
    public function actionPoster_face (){
        return $this->render('facePoster', [
            'temp' => "Temp"
            ]);
    }
}
