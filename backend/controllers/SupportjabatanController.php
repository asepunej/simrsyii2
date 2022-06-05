<?php

namespace backend\controllers;

use app\models\Supportjabatan;
use app\models\SupportjabatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportjabatanController implements the CRUD actions for Supportjabatan model.
 */
class SupportjabatanController extends Controller
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
     * Lists all Supportjabatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportjabatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportjabatan model.
     * @param string $kd_jabatan Kd Jabatan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jabatan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jabatan),
        ]);
    }

    /**
     * Creates a new Supportjabatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportjabatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jabatan' => $model->kd_jabatan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportjabatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jabatan Kd Jabatan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jabatan)
    {
        $model = $this->findModel($kd_jabatan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jabatan' => $model->kd_jabatan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportjabatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jabatan Kd Jabatan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jabatan)
    {
        $this->findModel($kd_jabatan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportjabatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jabatan Kd Jabatan
     * @return Supportjabatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jabatan)
    {
        if (($model = Supportjabatan::findOne(['kd_jabatan' => $kd_jabatan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
