<?php

namespace backend\controllers;

use app\models\Pendaftaranpinjamrm;
use app\models\PendaftaranpinjamrmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendaftaranpinjamrmController implements the CRUD actions for Pendaftaranpinjamrm model.
 */
class PendaftaranpinjamrmController extends Controller
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
     * Lists all Pendaftaranpinjamrm models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PendaftaranpinjamrmSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pendaftaranpinjamrm model.
     * @param int $id_pinjam Id Pinjam
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pinjam)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pinjam),
        ]);
    }

    /**
     * Creates a new Pendaftaranpinjamrm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pendaftaranpinjamrm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pinjam' => $model->id_pinjam]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pendaftaranpinjamrm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pinjam Id Pinjam
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pinjam)
    {
        $model = $this->findModel($id_pinjam);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pinjam' => $model->id_pinjam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pendaftaranpinjamrm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pinjam Id Pinjam
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pinjam)
    {
        $this->findModel($id_pinjam)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pendaftaranpinjamrm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pinjam Id Pinjam
     * @return Pendaftaranpinjamrm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pinjam)
    {
        if (($model = Pendaftaranpinjamrm::findOne(['id_pinjam' => $id_pinjam])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
