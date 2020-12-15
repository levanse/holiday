<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vocation */
/* @var array $worker */
/* @var array $department */
/* @var array $position */
/* @var array $vocationList */

$this->title = 'Добавить отпуск';
$this->params['breadcrumbs'][] = ['label' => 'График отпусков', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="vocation-create">

    <?= $this->render('_form', [
        'model' => $model,
        'worker' => $worker,
        'department' => $department,
        'position' => $position,
        'vocationList' => $vocationList,
    ]) ?>

</div>
