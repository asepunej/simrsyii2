<?php

namespace backend\controllers;

use app\models\Supportpekerjaan;
use app\models\SupportpekerjaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportpekerjaanController implements the CRUD actions for Supportpekerjaan model.
 */
class SupportpekerjaanController extends Controller
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
     * Lists all Supportpekerjaan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportpekerjaanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportpekerjaan model.
     * @param string $kd_pekerjaan Kd Pekerjaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pekerjaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pekerjaan),
        ]);
    }

    /**
     * Creates a new Supportpekerjaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportpekerjaan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pekerjaan' => $model->kd_pekerjaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportpekerjaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pekerjaan Kd Pekerjaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pekerjaan)
    {
        $model = $this->findModel($kd_pekerjaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pekerjaan' => $model->kd_pekerjaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportpekerjaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pekerjaan Kd Pekerjaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pekerjaan)
    {
        $this->findModel($kd_pekerjaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportpekerjaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pekerjaan Kd Pekerjaan
     * @return Supportpekerjaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pekerjaan)
    {
        if (($model = Supportpekerjaan::findOne(['kd_pekerjaan' => $kd_pekerjaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
