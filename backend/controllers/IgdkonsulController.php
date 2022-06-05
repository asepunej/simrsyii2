<?php

namespace backend\controllers;

use app\models\Igdkonsul;
use app\models\IgdkonsulSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IgdkonsulController implements the CRUD actions for Igdkonsul model.
 */
class IgdkonsulController extends Controller
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
     * Lists all Igdkonsul models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IgdkonsulSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Igdkonsul model.
     * @param int $id_konsul Id Konsul
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_konsul)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_konsul),
        ]);
    }

    /**
     * Creates a new Igdkonsul model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Igdkonsul();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_konsul' => $model->id_konsul]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Igdkonsul model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_konsul Id Konsul
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_konsul)
    {
        $model = $this->findModel($id_konsul);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_konsul' => $model->id_konsul]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Igdkonsul model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_konsul Id Konsul
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_konsul)
    {
        $this->findModel($id_konsul)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Igdkonsul model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_konsul Id Konsul
     * @return Igdkonsul the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_konsul)
    {
        if (($model = Igdkonsul::findOne(['id_konsul' => $id_konsul])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
