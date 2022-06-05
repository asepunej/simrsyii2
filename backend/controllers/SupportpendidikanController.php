<?php

namespace backend\controllers;

use app\models\Supportpendidikan;
use app\models\SupportpendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportpendidikanController implements the CRUD actions for Supportpendidikan model.
 */
class SupportpendidikanController extends Controller
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
     * Lists all Supportpendidikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportpendidikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportpendidikan model.
     * @param string $kd_pendidikan Kd Pendidikan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pendidikan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pendidikan),
        ]);
    }

    /**
     * Creates a new Supportpendidikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportpendidikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pendidikan' => $model->kd_pendidikan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportpendidikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pendidikan Kd Pendidikan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pendidikan)
    {
        $model = $this->findModel($kd_pendidikan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pendidikan' => $model->kd_pendidikan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportpendidikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pendidikan Kd Pendidikan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pendidikan)
    {
        $this->findModel($kd_pendidikan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportpendidikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pendidikan Kd Pendidikan
     * @return Supportpendidikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pendidikan)
    {
        if (($model = Supportpendidikan::findOne(['kd_pendidikan' => $kd_pendidikan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
