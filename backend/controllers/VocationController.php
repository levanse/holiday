<?php

namespace backend\controllers;

use common\models\Department;
use common\models\Position;
use common\models\VocationList;
use common\models\Worker;
use Yii;
use common\models\Vocation;
use common\models\search\VocationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VocationController implements the CRUD actions for Vocation model.
 */
class VocationController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vocation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VocationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vocation model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Vocation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vocation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $worker = Worker::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();
        $department = Department::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();
        $position = Position::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();
        $vocationList = VocationList::find()->select('name, id')->indexBy('id')->asArray()->column();

        return $this->render('create', [
            'model' => $model,
            'worker' => $worker,
            'department' => $department,
            'position' => $position,
            'vocationList' => $vocationList,
        ]);
    }

    /**
     * Updates an existing Vocation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $worker = Worker::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();
        $department = Department::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();
        $position = Position::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();
        $vocationList = VocationList::find()->select('name, id')->indexBy('id')->orderBy('name ASC')->asArray()->column();

        return $this->render('update', [
            'model' => $model,
            'worker' => $worker,
            'department' => $department,
            'position' => $position,
            'vocationList' => $vocationList
        ]);
    }

    /**
     * Deletes an existing Vocation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vocation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vocation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vocation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
