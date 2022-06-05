<?php

namespace backend\controllers;

use app\models\Supportjenispasien;
use app\models\SupportjenispasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportjenispasienController implements the CRUD actions for Supportjenispasien model.
 */
class SupportjenispasienController extends Controller
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
     * Lists all Supportjenispasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportjenispasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportjenispasien model.
     * @param string $kd_jenis_pasien Kd Jenis Pasien
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_pasien)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_pasien),
        ]);
    }

    /**
     * Creates a new Supportjenispasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportjenispasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_pasien' => $model->kd_jenis_pasien]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportjenispasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_pasien Kd Jenis Pasien
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_pasien)
    {
        $model = $this->findModel($kd_jenis_pasien);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_pasien' => $model->kd_jenis_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportjenispasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_pasien Kd Jenis Pasien
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_pasien)
    {
        $this->findModel($kd_jenis_pasien)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportjenispasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_pasien Kd Jenis Pasien
     * @return Supportjenispasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_pasien)
    {
        if (($model = Supportjenispasien::findOne(['kd_jenis_pasien' => $kd_jenis_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
