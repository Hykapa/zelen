<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookReturnSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Возврат книг';
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
        'eturn_date',
        'book_condition',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>