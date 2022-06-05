<?php

namespace backend\controllers;

use app\models\Supportprovinsi;
use app\models\SupportprovinsiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportprovinsiController implements the CRUD actions for Supportprovinsi model.
 */
class SupportprovinsiController extends Controller
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
     * Lists all Supportprovinsi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SupportprovinsiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supportprovinsi model.
     * @param string $kdprovinsi Kdprovinsi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kdprovinsi)
    {
        return $this->render('view', [
            'model' => $this->findModel($kdprovinsi),
        ]);
    }

    /**
     * Creates a new Supportprovinsi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Supportprovinsi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kdprovinsi' => $model->kdprovinsi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supportprovinsi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kdprovinsi Kdprovinsi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kdprovinsi)
    {
        $model = $this->findModel($kdprovinsi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kdprovinsi' => $model->kdprovinsi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supportprovinsi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kdprovinsi Kdprovinsi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kdprovinsi)
    {
        $this->findModel($kdprovinsi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supportprovinsi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kdprovinsi Kdprovinsi
     * @return Supportprovinsi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kdprovinsi)
    {
        if (($model = Supportprovinsi::findOne(['kdprovinsi' => $kdprovinsi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
