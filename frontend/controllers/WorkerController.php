<?php

namespace frontend\controllers;

use common\models\Vocation;
use common\models\Worker;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class WorkerController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $worker = Yii::$app->request->get('Worker');
        if (empty($worker)) {
            $worker = 1;
        }
        $model = [];
        $vocations = [];
        if (!empty($worker)) {
            $model = Worker::find()->where(['id' => $worker])->orderBy('id')->one();
            $vocations = Vocation::find()->where(['worker_id' => $worker])->orderBy('month, day_begin')->all();
        }
        $workers = Worker::find()->select('name, id')->indexBy('id')->asArray()->column();

        return $this->render('index', [
            'model' => $model,
            'vocations' => $vocations,
            'workers' => $workers,
        ]);
    }

}
