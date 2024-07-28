<?php
namespace app\controllers;

use app\models\Book;
use yii\web\Controller;
use Yii;
class BookController extends Controller
{
    public function actionCreate()
    {
        $model = new Book();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['book/index']);
        }
        return $this->render('create', ['model' => $model]);
    }
}