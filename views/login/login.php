<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \yii\auth\Form */

$this->title = 'Вход в систему';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::beginForm(['login/login'], 'post')?>
    <?= Html::activeTextInput($model, 'username')?>
    <?= Html::activePasswordInput($model, 'password')?>
    <?= Html::submitButton('Войти')?>
<?= Html::endForm()?>