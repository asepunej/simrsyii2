<?php

namespace backend\controllers;

use app\models\Supportstatuskawin;
use app\models\SupportstatuskawinSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportstatuskawinController implements the CRUD actions for Supportstatuskawin model.
 */
class SupportstatuskawinController extends Controller
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
     * Lists all Supportstatuskawin models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportstatuskawinSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportstatuskawin model.
     * @param string $kd_status_kawin Kd Status Kawin
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_status_kawin)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_status_kawin),
        ]);
    }

    /**
     * Creates a new Supportstatuskawin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportstatuskawin();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_status_kawin' => $model->kd_status_kawin]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportstatuskawin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_status_kawin Kd Status Kawin
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_status_kawin)
    {
        $model = $this->findModel($kd_status_kawin);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_status_kawin' => $model->kd_status_kawin]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportstatuskawin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_status_kawin Kd Status Kawin
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_status_kawin)
    {
        $this->findModel($kd_status_kawin)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportstatuskawin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_status_kawin Kd Status Kawin
     * @return Supportstatuskawin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_status_kawin)
    {
        if (($model = Supportstatuskawin::findOne(['kd_status_kawin' => $kd_status_kawin])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
