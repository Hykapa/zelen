<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookIssue */

$this->title = 'Выдача книги клиенту';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::beginForm(['book-issue/create'], 'post')?>
    <?= Html::activeTextInput($model, 'book_id')?>
    <?= Html::activeTextInput($model, 'client_id')?>
    <?= Html::activeTextInput($model, 'employee_id')?>
    <?= Html::activeTextInput($model, 'issue_date')?>
    <?= Html::activeTextInput($model, 'eturn_date')?>
    <?= Html::submitButton('Выдать')?>
<?= Html::endForm()?>