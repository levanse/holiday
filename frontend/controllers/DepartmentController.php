<?php

namespace frontend\controllers;

use common\models\Department;
use common\models\Vocation;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class DepartmentController extends Controller
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
        $department = Yii::$app->request->get('Department');
        if (empty($department)) {
            $department = 1;
        }
        $model = [];
        $vocations = [];
        if (!empty($department)) {
            $model = Department::find()->where(['id' => $department])->orderBy('id')->one();
            $vocations = Vocation::find()->where(['department_id' => $department])->orderBy('month')->all();
        }
        $departments = Department::find()->select('name, id')->indexBy('id')->asArray()->column();

        return $this->render('index', [
            'model' => $model,
            'vocations' => $vocations,
            'departments' => $departments
        ]);
    }

}
