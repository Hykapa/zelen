<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Client */

$this->title = 'Добавление клиента';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::beginForm(['client/create'], 'post')?>
    <?= Html::activeTextInput($model, 'full_name')?>
    <?= Html::activeTextInput($model, 'passport_series')?>
    <?= Html::activeTextInput($model, 'passport_number')?>
    <?= Html::submitButton('Добавить')?>
<?= Html::endForm()?>