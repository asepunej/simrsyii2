<?php

namespace backend\controllers;

use app\models\Igddiagnosa;
use app\models\IgddiagnosaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IgddiagnosaController implements the CRUD actions for Igddiagnosa model.
 */
class IgddiagnosaController extends Controller
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
     * Lists all Igddiagnosa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IgddiagnosaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Igddiagnosa model.
     * @param int $id_diagnosa Id Diagnosa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_diagnosa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_diagnosa),
        ]);
    }

    /**
     * Creates a new Igddiagnosa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Igddiagnosa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_diagnosa' => $model->id_diagnosa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Igddiagnosa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_diagnosa Id Diagnosa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_diagnosa)
    {
        $model = $this->findModel($id_diagnosa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_diagnosa' => $model->id_diagnosa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Igddiagnosa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_diagnosa Id Diagnosa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_diagnosa)
    {
        $this->findModel($id_diagnosa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Igddiagnosa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_diagnosa Id Diagnosa
     * @return Igddiagnosa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_diagnosa)
    {
        if (($model = Igddiagnosa::findOne(['id_diagnosa' => $id_diagnosa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
