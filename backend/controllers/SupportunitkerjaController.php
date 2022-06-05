<?php

namespace backend\controllers;

use app\models\Supportunitkerja;
use app\models\SupportunitkerjaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportunitkerjaController implements the CRUD actions for Supportunitkerja model.
 */
class SupportunitkerjaController extends Controller
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
     * Lists all Supportunitkerja models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportunitkerjaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportunitkerja model.
     * @param string $kdunitkerja Kdunitkerja
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kdunitkerja)
    {
        return $this->render('view', [
            'model' => $this->findModel($kdunitkerja),
        ]);
    }

    /**
     * Creates a new Supportunitkerja model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportunitkerja();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kdunitkerja' => $model->kdunitkerja]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportunitkerja model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kdunitkerja Kdunitkerja
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kdunitkerja)
    {
        $model = $this->findModel($kdunitkerja);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kdunitkerja' => $model->kdunitkerja]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportunitkerja model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kdunitkerja Kdunitkerja
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kdunitkerja)
    {
        $this->findModel($kdunitkerja)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportunitkerja model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kdunitkerja Kdunitkerja
     * @return Supportunitkerja the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kdunitkerja)
    {
        if (($model = Supportunitkerja::findOne(['kdunitkerja' => $kdunitkerja])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
