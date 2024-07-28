<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = 'Добавление книги';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::beginForm(['book/create'], 'post')?>
    <?= Html::activeTextInput($model, 'name')?>
    <?= Html::activeTextInput($model, 'article')?>
    <?= Html::activeTextInput($model, 'receipt_date')?>
    <?= Html::activeTextInput($model, 'author')?>
    <?= Html::submitButton('Добавить')?>
<?= Html::endForm()?>