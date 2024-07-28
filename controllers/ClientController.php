<?php
namespace app\controllers;

use app\models\Client;
use yii\web\Controller;
use Yii;
class ClientController extends Controller
{
    public function actionCreate()
    {
        $model = new Client();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['client/index']);
        }
        return $this->render('create', ['model' => $model]);
    }
}