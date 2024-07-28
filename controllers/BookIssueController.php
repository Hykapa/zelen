<?php
namespace app\controllers;

use app\models\BookIssue;
use yii\web\Controller;
use Yii;
class BookIssueController extends Controller
{
    public function actionCreate()
    {
        $model = new BookIssue();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['book-issue/index']);
        }
        return $this->render('create', ['model' => $model]);
    }
}