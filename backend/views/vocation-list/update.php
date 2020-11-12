<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VocationList */

$this->title = 'Обновить данные';
$this->params['breadcrumbs'][] = ['label' => 'Виды отпусков', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="vocation-list-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
