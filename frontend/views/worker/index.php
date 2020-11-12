<?php

/* @var $this yii\web\View */
/* @var $model common\models\Worker */
/* @var $vocations common\models\Vocation[] */

/** @var $workers frontend\controllers\WorkerController[] */

use common\helpers\Constant;
use yii\helpers\VarDumper;
use yii\widgets\ActiveForm;

$this->title = 'Ф.И.О';
$this->params['breadcrumbs'][] = $this->title;

?>

<ul class="nav nav-tabs">
    <li role="presentation"><a href="/month/">Месяц</a></li>
    <li role="presentation" class="active"><a href="/worker/">Ф.И.О.</a></li>
    <li role="presentation"><a href="/department/">Отделы</a></li>
</ul>
<br>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'id')->label('Выберите сотрудника')->dropDownList($workers) ?>
<?php ActiveForm::end(); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Вид отпуска</th>
        <th scope="col">Месяц</th>
        <th scope="col">Начало отпуска</th>
        <th scope="col">Конец отпуска</th>
        <th scope="col">Использован</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $numeration = 1;
    foreach ($vocations as $vocation) {
        ?>
        <tr>
            <th scope="row"><?= $numeration++ ?></th>
            <td><?= $vocation->vocationList->name ?></td>
            <td><?= Constant::$months[$vocation->month] ?></td>
            <td><?= $vocation->day_begin ?></td>
            <td><?= $vocation->day_end ?></td>
            <td><?= Constant::$go[$vocation->go] ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
