<?php

/* @var $this yii\web\View */
/* @var $model common\models\Department */
/* @var $vocations common\models\Vocation[] */

/** @var $departments frontend\controllers\DepartmentController[] */

use common\helpers\Constant;
use yii\widgets\ActiveForm;

$this->title = 'Отделы';
$this->params['breadcrumbs'][] = $this->title;

?>

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link" href="/month/">Месяц</a></li>
    <li class="nav-item"><a class="nav-link" href="/worker/">Ф.И.О.</a></li>
    <li class="nav-item"><a class="nav-link active" href="/department/">Отделы</a></li>
</ul>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'id')->label('')->dropDownList($departments) ?>
<?php ActiveForm::end(); ?>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ф.И.О.</th>
        <th scope="col">Должность</th>
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
            <td><?= $vocation->worker->name ?></td>
            <td><?= $vocation->position->name ?></td>
            <td><?= $vocation->vocationList->name ?></td>
            <td><?= Constant::$months[$vocation->month] ?></td>
            <td><?= $vocation->day_begin ?></td>
            <td><?= $vocation->day_end ?></td>
            <td><?= Constant::$go[$vocation->go] ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
