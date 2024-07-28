<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookReturn */

$this->title = 'Возврат книги';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::beginForm(['book-return/create'], 'post')?>
    <?= Html::activeTextInput($model, 'book_id')?>
    <?= Html::activeTextInput($model, 'client_id')?>
    <?= Html::activeTextInput($model, 'employee_id')?>
    <?= Html::activeTextInput($model, 'eturn_date')?>
    <?= Html::activeTextInput($model, 'book_condition')?>
    <?= Html::submitButton('Вернуть')?>
<?= Html::endForm()?>