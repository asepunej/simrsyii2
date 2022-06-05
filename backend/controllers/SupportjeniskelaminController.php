<?php

namespace backend\controllers;

use app\models\Supportjeniskelamin;
use app\models\SupportjeniskelaminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportjeniskelaminController implements the CRUD actions for Supportjeniskelamin model.
 */
class SupportjeniskelaminController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Supportjeniskelamin models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportjeniskelaminSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportjeniskelamin model.
     * @param string $kd_jenis_kelamin Kd Jenis Kelamin
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_kelamin)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_kelamin),
        ]);
    }

    /**
     * Creates a new Supportjeniskelamin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportjeniskelamin();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_kelamin' => $model->kd_jenis_kelamin]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportjeniskelamin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_kelamin Kd Jenis Kelamin
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_kelamin)
    {
        $model = $this->findModel($kd_jenis_kelamin);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_kelamin' => $model->kd_jenis_kelamin]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportjeniskelamin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_kelamin Kd Jenis Kelamin
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_kelamin)
    {
        $this->findModel($kd_jenis_kelamin)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportjeniskelamin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_kelamin Kd Jenis Kelamin
     * @return Supportjeniskelamin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_kelamin)
    {
        if (($model = Supportjeniskelamin::findOne(['kd_jenis_kelamin' => $kd_jenis_kelamin])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
