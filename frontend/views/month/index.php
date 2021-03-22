<?php

/* @var $this yii\web\View */
/* @var $month frontend\controllers\MonthController */
/* @var $vocations common\models\Vocation[] */

/** @var $months frontend\controllers\MonthController[] */

use common\helpers\Constant;
use yii\helpers\Html;

$this->title = 'Месяц';
$this->params['breadcrumbs'][] = $this->title;

?>

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="/month/">Месяц</a></li>
    <li class="nav-item"><a class="nav-link" href="/worker/">Ф.И.О.</a></li>
    <li class="nav-item"><a class="nav-link" href="/department/">Отделы</a></li>
</ul>
<br>
<?= Html::dropDownList('id', $month, $months, ['id' => 'month-id', 'class' => 'form-control']) ?>
<br>
<table class="table table-striped">
    <thead class="thead-dark">
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
