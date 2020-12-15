<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vocation */
/* @var array $worker */
/* @var array $department */
/* @var array $position */
/* @var array $vocationList */

$this->title = 'Обновить данные';
$this->params['breadcrumbs'][] = ['label' => 'График отпусков', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="vocation-update">

    <?= $this->render('_form', [
        'model' => $model,
        'worker' => $worker,
        'department' => $department,
        'position' => $position,
        'vocationList' => $vocationList
    ]) ?>

</div>
