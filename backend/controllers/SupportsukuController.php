<?php

namespace backend\controllers;

use app\models\Supportsuku;
use app\models\SupportsukuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportsukuController implements the CRUD actions for Supportsuku model.
 */
class SupportsukuController extends Controller
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
     * Lists all Supportsuku models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportsukuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportsuku model.
     * @param string $kd_suku Kd Suku
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_suku)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_suku),
        ]);
    }

    /**
     * Creates a new Supportsuku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportsuku();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_suku' => $model->kd_suku]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportsuku model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_suku Kd Suku
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_suku)
    {
        $model = $this->findModel($kd_suku);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_suku' => $model->kd_suku]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportsuku model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_suku Kd Suku
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_suku)
    {
        $this->findModel($kd_suku)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportsuku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_suku Kd Suku
     * @return Supportsuku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_suku)
    {
        if (($model = Supportsuku::findOne(['kd_suku' => $kd_suku])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
