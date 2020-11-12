<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VocationList */

$this->title = 'Добавить отпуск';
$this->params['breadcrumbs'][] = ['label' => 'Виды отпусков', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vocation-list-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
