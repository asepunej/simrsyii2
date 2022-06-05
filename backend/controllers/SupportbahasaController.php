<?php

namespace backend\controllers;

use app\models\Supportbahasa;
use app\models\SupportbahasaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportbahasaController implements the CRUD actions for Supportbahasa model.
 */
class SupportbahasaController extends Controller
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
     * Lists all Supportbahasa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportbahasaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportbahasa model.
     * @param string $kd_bahasa Kd Bahasa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_bahasa)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_bahasa),
        ]);
    }

    /**
     * Creates a new Supportbahasa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportbahasa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_bahasa' => $model->kd_bahasa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportbahasa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_bahasa Kd Bahasa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_bahasa)
    {
        $model = $this->findModel($kd_bahasa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_bahasa' => $model->kd_bahasa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportbahasa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_bahasa Kd Bahasa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_bahasa)
    {
        $this->findModel($kd_bahasa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportbahasa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_bahasa Kd Bahasa
     * @return Supportbahasa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_bahasa)
    {
        if (($model = Supportbahasa::findOne(['kd_bahasa' => $kd_bahasa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
