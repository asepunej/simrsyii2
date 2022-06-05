<?php

namespace backend\controllers;

use app\models\Supportkabupaten;
use app\models\SupportkabupatenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportkabupatenController implements the CRUD actions for Supportkabupaten model.
 */
class SupportkabupatenController extends Controller
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
     * Lists all Supportkabupaten models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportkabupatenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportkabupaten model.
     * @param string $kdkabupaten Kdkabupaten
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kdkabupaten)
    {
        return $this->render('view', [
            'model' => $this->findModel($kdkabupaten),
        ]);
    }

    /**
     * Creates a new Supportkabupaten model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportkabupaten();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kdkabupaten' => $model->kdkabupaten]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportkabupaten model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kdkabupaten Kdkabupaten
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kdkabupaten)
    {
        $model = $this->findModel($kdkabupaten);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kdkabupaten' => $model->kdkabupaten]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportkabupaten model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kdkabupaten Kdkabupaten
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kdkabupaten)
    {
        $this->findModel($kdkabupaten)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportkabupaten model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kdkabupaten Kdkabupaten
     * @return Supportkabupaten the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kdkabupaten)
    {
        if (($model = Supportkabupaten::findOne(['kdkabupaten' => $kdkabupaten])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
