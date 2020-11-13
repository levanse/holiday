<?php

/* @var $this yii\web\View */
/* @var $month frontend\controllers\MonthController */
/* @var $vocations common\models\Vocation[] */
/** @var $months frontend\controllers\MonthController[] */

use common\helpers\Constant;
use yii\helpers\Html;
use yii\helpers\VarDumper;

$this->title = 'Месяц';
$this->params['breadcrumbs'][] = $this->title;

?>

<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="/month/">Месяц</a></li>
    <li role="presentation"><a href="/worker/">Ф.И.О.</a></li>
    <li role="presentation"><a href="/department/">Отделы</a></li>
</ul>
<br>

<?= Html::dropDownList('id', $month, $months, ['id' => 'month-id', 'class' => 'form-control']) ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ф.И.О.</th>
        <th scope="col">Вид отпуска</th>
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
            <td><?= $vocation->vocationList->name ?></td>
            <td><?= $vocation->day_begin ?></td>
            <td><?= $vocation->day_end ?></td>
            <td><?= Constant::$go[$vocation->go] ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>


