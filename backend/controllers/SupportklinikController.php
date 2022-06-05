<?php

namespace backend\controllers;

use app\models\Supportklinik;
use app\models\SupportklinikSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportklinikController implements the CRUD actions for Supportklinik model.
 */
class SupportklinikController extends Controller
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
     * Lists all Supportklinik models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportklinikSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportklinik model.
     * @param string $kd_klinik Kd Klinik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_klinik)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_klinik),
        ]);
    }

    /**
     * Creates a new Supportklinik model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportklinik();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_klinik' => $model->kd_klinik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportklinik model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_klinik Kd Klinik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_klinik)
    {
        $model = $this->findModel($kd_klinik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_klinik' => $model->kd_klinik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportklinik model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_klinik Kd Klinik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_klinik)
    {
        $this->findModel($kd_klinik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportklinik model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_klinik Kd Klinik
     * @return Supportklinik the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_klinik)
    {
        if (($model = Supportklinik::findOne(['kd_klinik' => $kd_klinik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
