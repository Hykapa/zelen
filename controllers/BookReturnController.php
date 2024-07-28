<?php
namespace app\controllers;

use app\models\BookReturn;
use yii\web\Controller;
use Yii;
class BookReturnController extends Controller
{
    public function actionCreate()
    {
        $model = new BookReturn();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['book-return/index']);
        }
        return $this->render('create', ['model' => $model]);
    }
}