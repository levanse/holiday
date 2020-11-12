<?php

use common\helpers\Constant;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vocation */
/* @var $form yii\widgets\ActiveForm */
/* @var array $worker */
/* @var array $department */
/* @var array $position */
/* @var array $vocationList */

?>

<div class="vocation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worker_id')->dropDownList($worker) ?>

    <?= $form->field($model, 'department_id')->dropDownList($department) ?>

    <?= $form->field($model, 'position_id')->dropDownList($position) ?>

    <?= $form->field($model, 'vocation_list_id')->dropDownList($vocationList) ?>

    <?= $form->field($model, 'month')->dropDownList(Constant::$months) ?>

    <?= $form->field($model, 'day_begin')->textInput() ?>

    <?= $form->field($model, 'day_end')->textInput() ?>

    <?= $form->field($model, 'go')->dropDownList(Constant::$go) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
