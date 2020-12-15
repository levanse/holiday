<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\VocationListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Виды отпусков';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vocation-list-index">

    <p>
        <?= Html::a('Добавить отпуск', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'info',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="fas fa-eye"></span>', ['view', 'id' => $model->id], ['title' => 'Просмотр']);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="fas fa-pencil-alt"></span>', ['update', 'id' => $model->id], ['title' => 'Редактировать']);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="fas fa-trash"></span>', ['delete', 'id' => $model->id], ['title' => 'Удалить', 'data-method' => 'post', 'data-confirm' => "Вы уверены, что хотите удалить?"]);
                    },
                ],
            ],
        ],
    ]); ?>

</div>
