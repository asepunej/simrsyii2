<?php

namespace backend\controllers;

use app\models\Supportagama;
use app\models\SupportagamaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportagamaController implements the CRUD actions for Supportagama model.
 */
class SupportagamaController extends Controller
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
     * Lists all Supportagama models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportagamaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportagama model.
     * @param string $kd_agama Kd Agama
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_agama)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_agama),
        ]);
    }

    /**
     * Creates a new Supportagama model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportagama();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_agama' => $model->kd_agama]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportagama model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_agama Kd Agama
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_agama)
    {
        $model = $this->findModel($kd_agama);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_agama' => $model->kd_agama]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportagama model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_agama Kd Agama
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_agama)
    {
        $this->findModel($kd_agama)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportagama model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_agama Kd Agama
     * @return Supportagama the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_agama)
    {
        if (($model = Supportagama::findOne(['kd_agama' => $kd_agama])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
