<?php

use common\helpers\Constant;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\VocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'График отпусков';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="vocation-index">

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
            [
                'attribute' => 'worker_id',
                'format' => 'text',
                'value' => function ($model) {
                    return $model->worker->name;
                }
            ],
            [
                'attribute' => 'department_id',
                'format' => 'text',
                'value' => function ($model) {
                    return $model->department->name;
                }
            ],
            [
                'attribute' => 'position_id',
                'format' => 'text',
                'value' => function ($model) {
                    return $model->position->name;
                }
            ],
            [
                'attribute' => 'vocation_list_id',
                'format' => 'text',
                'value' => function ($model) {
                    return $model->vocationList->name;
                }
            ],
            [
                'attribute' => 'month',
                'format' => 'text',
                'value' => function ($model) {
                    return Constant::$months[$model->month];
                }
            ],
            'day_begin',
            'day_end',
            [
                'attribute' => 'go',
                'format' => 'text',
                'value' => function ($model) {
                    return Constant::$go[$model->go];
                }
            ],

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
