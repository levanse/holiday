<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Обновить данные';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="worker-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
