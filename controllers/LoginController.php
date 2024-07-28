<?php

namespace app\controllers;

use app\models\LoginForm;
use yii\auth\AuthManager;
use yii\web\Controller;
use Yii;
class LoginController extends Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/index']);
        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/index']);
    }
}