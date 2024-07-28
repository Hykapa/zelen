<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = 'Добавление сотрудника';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::beginForm(['employee/create'], 'post')?>
    <?= Html::activeTextInput($model, 'full_name')?>
    <?= Html::activeTextInput($model, 'position')?>
    <?= Html::submitButton('Добавить')?>
<?= Html::endForm()?>