<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Position */

$this->title = 'Обновить данные';
$this->params['breadcrumbs'][] = ['label' => 'Должности', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="position-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
