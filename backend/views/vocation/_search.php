<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\VocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vocation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'worker_id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'position_id') ?>

    <?= $form->field($model, 'vocation_list_id') ?>

    <?php // echo $form->field($model, 'month') ?>

    <?php // echo $form->field($model, 'day_begin') ?>

    <?php // echo $form->field($model, 'day_end') ?>

    <?php // echo $form->field($model, 'go') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
