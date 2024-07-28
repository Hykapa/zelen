<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookIssueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Выдача книг';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'book_id',
        'client_id',
        'employee_id',
        'issue_date',
        'eturn_date',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>