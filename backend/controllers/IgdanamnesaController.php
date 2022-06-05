<?php

namespace backend\controllers;

use app\models\Igdanamnesa;
use app\models\IgdanamnesaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IgdanamnesaController implements the CRUD actions for Igdanamnesa model.
 */
class IgdanamnesaController extends Controller
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
     * Lists all Igdanamnesa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IgdanamnesaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Igdanamnesa model.
     * @param int $id_anamnesa Id Anamnesa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_anamnesa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_anamnesa),
        ]);
    }

    /**
     * Creates a new Igdanamnesa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Igdanamnesa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_anamnesa' => $model->id_anamnesa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Igdanamnesa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_anamnesa Id Anamnesa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_anamnesa)
    {
        $model = $this->findModel($id_anamnesa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_anamnesa' => $model->id_anamnesa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Igdanamnesa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_anamnesa Id Anamnesa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_anamnesa)
    {
        $this->findModel($id_anamnesa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Igdanamnesa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_anamnesa Id Anamnesa
     * @return Igdanamnesa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_anamnesa)
    {
        if (($model = Igdanamnesa::findOne(['id_anamnesa' => $id_anamnesa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
