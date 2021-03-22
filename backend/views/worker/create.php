<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Добавить сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
