<?php

namespace backend\controllers;

use app\models\Supportjenispembayaran;
use app\models\SupportjenispembayaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportjenispembayaranController implements the CRUD actions for Supportjenispembayaran model.
 */
class SupportjenispembayaranController extends Controller
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
     * Lists all Supportjenispembayaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportjenispembayaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportjenispembayaran model.
     * @param string $kd_jenis_pembayaran Kd Jenis Pembayaran
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_pembayaran)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_pembayaran),
        ]);
    }

    /**
     * Creates a new Supportjenispembayaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportjenispembayaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_pembayaran' => $model->kd_jenis_pembayaran]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportjenispembayaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_pembayaran Kd Jenis Pembayaran
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_pembayaran)
    {
        $model = $this->findModel($kd_jenis_pembayaran);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_pembayaran' => $model->kd_jenis_pembayaran]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportjenispembayaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_pembayaran Kd Jenis Pembayaran
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_pembayaran)
    {
        $this->findModel($kd_jenis_pembayaran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportjenispembayaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_pembayaran Kd Jenis Pembayaran
     * @return Supportjenispembayaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_pembayaran)
    {
        if (($model = Supportjenispembayaran::findOne(['kd_jenis_pembayaran' => $kd_jenis_pembayaran])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
