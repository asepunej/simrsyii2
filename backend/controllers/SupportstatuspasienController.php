<?php

namespace backend\controllers;

use app\models\Supportstatuspasien;
use app\models\SupportstatuspasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportstatuspasienController implements the CRUD actions for Supportstatuspasien model.
 */
class SupportstatuspasienController extends Controller
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
     * Lists all Supportstatuspasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportstatuspasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportstatuspasien model.
     * @param string $kd_status_pasien Kd Status Pasien
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_status_pasien)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_status_pasien),
        ]);
    }

    /**
     * Creates a new Supportstatuspasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportstatuspasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_status_pasien' => $model->kd_status_pasien]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportstatuspasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_status_pasien Kd Status Pasien
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_status_pasien)
    {
        $model = $this->findModel($kd_status_pasien);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_status_pasien' => $model->kd_status_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportstatuspasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_status_pasien Kd Status Pasien
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_status_pasien)
    {
        $this->findModel($kd_status_pasien)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportstatuspasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_status_pasien Kd Status Pasien
     * @return Supportstatuspasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_status_pasien)
    {
        if (($model = Supportstatuspasien::findOne(['kd_status_pasien' => $kd_status_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
