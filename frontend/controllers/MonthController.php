<?php

namespace frontend\controllers;

use common\helpers\Constant;
use common\models\Vocation;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class MonthController extends Controller
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
        $month = Yii::$app->request->get('Month');
        if (empty($month)) {
            $month = date('n');
        }
        $vocations = [];
        if (!empty($month)) {
            $vocations = Vocation::find()->where(['month' => $month])->orderBy('day_begin')->all();
        }
        $months = Constant::$months;

        return $this->render('index', [
            'month' => $month,
            'vocations' => $vocations,
            'months' => $months
        ]);
    }

}
