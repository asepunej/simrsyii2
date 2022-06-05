<?php

namespace backend\controllers;

use app\models\Supportdesa;
use app\models\SupportdesaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportdesaController implements the CRUD actions for Supportdesa model.
 */
class SupportdesaController extends Controller
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
     * Lists all Supportdesa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportdesaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportdesa model.
     * @param string $kddesa Kddesa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kddesa)
    {
        return $this->render('view', [
            'model' => $this->findModel($kddesa),
        ]);
    }

    /**
     * Creates a new Supportdesa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportdesa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kddesa' => $model->kddesa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportdesa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kddesa Kddesa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kddesa)
    {
        $model = $this->findModel($kddesa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kddesa' => $model->kddesa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportdesa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kddesa Kddesa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kddesa)
    {
        $this->findModel($kddesa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportdesa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kddesa Kddesa
     * @return Supportdesa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kddesa)
    {
        if (($model = Supportdesa::findOne(['kddesa' => $kddesa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
