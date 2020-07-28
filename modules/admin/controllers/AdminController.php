<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    /**
     * @param $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action) {
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('auth_site_admin')) {
            $this->redirect('/admin/auth/login');
            return false;
        }
        return parent::beforeAction($action);
    }
}