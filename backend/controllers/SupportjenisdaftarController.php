<?php

namespace backend\controllers;

use app\models\Supportjenisdaftar;
use app\models\SupportjenisdaftarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportjenisdaftarController implements the CRUD actions for Supportjenisdaftar model.
 */
class SupportjenisdaftarController extends Controller
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
     * Lists all Supportjenisdaftar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportjenisdaftarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportjenisdaftar model.
     * @param string $kd_jenis_daftar Kd Jenis Daftar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_daftar)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_daftar),
        ]);
    }

    /**
     * Creates a new Supportjenisdaftar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportjenisdaftar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_daftar' => $model->kd_jenis_daftar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportjenisdaftar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_daftar Kd Jenis Daftar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_daftar)
    {
        $model = $this->findModel($kd_jenis_daftar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_daftar' => $model->kd_jenis_daftar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportjenisdaftar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_daftar Kd Jenis Daftar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_daftar)
    {
        $this->findModel($kd_jenis_daftar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportjenisdaftar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_daftar Kd Jenis Daftar
     * @return Supportjenisdaftar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_daftar)
    {
        if (($model = Supportjenisdaftar::findOne(['kd_jenis_daftar' => $kd_jenis_daftar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
