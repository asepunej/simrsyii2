<?php

namespace backend\controllers;

use app\models\Supportpilihanmedis;
use app\models\SupportpilihanmedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportpilihanmedisController implements the CRUD actions for Supportpilihanmedis model.
 */
class SupportpilihanmedisController extends Controller
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
     * Lists all Supportpilihanmedis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportpilihanmedisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportpilihanmedis model.
     * @param string $kd_pilihan_medis Kd Pilihan Medis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pilihan_medis)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pilihan_medis),
        ]);
    }

    /**
     * Creates a new Supportpilihanmedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportpilihanmedis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pilihan_medis' => $model->kd_pilihan_medis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportpilihanmedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pilihan_medis Kd Pilihan Medis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pilihan_medis)
    {
        $model = $this->findModel($kd_pilihan_medis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pilihan_medis' => $model->kd_pilihan_medis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportpilihanmedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pilihan_medis Kd Pilihan Medis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pilihan_medis)
    {
        $this->findModel($kd_pilihan_medis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportpilihanmedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pilihan_medis Kd Pilihan Medis
     * @return Supportpilihanmedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pilihan_medis)
    {
        if (($model = Supportpilihanmedis::findOne(['kd_pilihan_medis' => $kd_pilihan_medis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
