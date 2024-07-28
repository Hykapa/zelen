<?php
namespace app\controllers;

use app\models\Employee;
use yii\web\Controller;
use Yii;
class EmployeeController extends Controller
{
    public function actionCreate()
    {
        $model = new Employee();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['employee/index']);
        }
        return $this->render('create', ['model' => $model]);
    }
}