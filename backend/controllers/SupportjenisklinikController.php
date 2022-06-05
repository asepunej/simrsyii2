<?php

namespace backend\controllers;

use app\models\Supportjenisklinik;
use app\models\SupportjenisklinikSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportjenisklinikController implements the CRUD actions for Supportjenisklinik model.
 */
class SupportjenisklinikController extends Controller
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
     * Lists all Supportjenisklinik models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportjenisklinikSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportjenisklinik model.
     * @param string $kd_jenis_klinik Kd Jenis Klinik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_klinik)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_klinik),
        ]);
    }

    /**
     * Creates a new Supportjenisklinik model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportjenisklinik();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_klinik' => $model->kd_jenis_klinik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportjenisklinik model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_klinik Kd Jenis Klinik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_klinik)
    {
        $model = $this->findModel($kd_jenis_klinik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_klinik' => $model->kd_jenis_klinik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportjenisklinik model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_klinik Kd Jenis Klinik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_klinik)
    {
        $this->findModel($kd_jenis_klinik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportjenisklinik model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_klinik Kd Jenis Klinik
     * @return Supportjenisklinik the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_klinik)
    {
        if (($model = Supportjenisklinik::findOne(['kd_jenis_klinik' => $kd_jenis_klinik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
