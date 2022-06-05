<?php

namespace backend\controllers;

use app\models\Publicregistrasipoli;
use app\models\PublicregistrasipoliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PublicregistrasipoliController implements the CRUD actions for Publicregistrasipoli model.
 */
class PublicregistrasipoliController extends Controller
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
     * Lists all Publicregistrasipoli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PublicregistrasipoliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publicregistrasipoli model.
     * @param int $id_registrasi_poli Id Registrasi Poli
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_registrasi_poli)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_registrasi_poli),
        ]);
    }

    /**
     * Creates a new Publicregistrasipoli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Publicregistrasipoli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_registrasi_poli' => $model->id_registrasi_poli]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Publicregistrasipoli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_registrasi_poli Id Registrasi Poli
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_registrasi_poli)
    {
        $model = $this->findModel($id_registrasi_poli);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_registrasi_poli' => $model->id_registrasi_poli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Publicregistrasipoli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_registrasi_poli Id Registrasi Poli
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_registrasi_poli)
    {
        $this->findModel($id_registrasi_poli)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Publicregistrasipoli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_registrasi_poli Id Registrasi Poli
     * @return Publicregistrasipoli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_registrasi_poli)
    {
        if (($model = Publicregistrasipoli::findOne(['id_registrasi_poli' => $id_registrasi_poli])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
