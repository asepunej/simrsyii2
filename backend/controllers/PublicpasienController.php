<?php

namespace backend\controllers;

use app\models\Publicpasien;
use app\models\PublicpasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PublicpasienController implements the CRUD actions for Publicpasien model.
 */
class PublicpasienController extends Controller
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
     * Lists all Publicpasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PublicpasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publicpasien model.
     * @param int $no_rm No Rm
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rm)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rm),
        ]);
    }

    /**
     * Creates a new Publicpasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Publicpasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rm' => $model->no_rm]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Publicpasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $no_rm No Rm
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rm)
    {
        $model = $this->findModel($no_rm);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rm' => $model->no_rm]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Publicpasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $no_rm No Rm
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rm)
    {
        $this->findModel($no_rm)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Publicpasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $no_rm No Rm
     * @return Publicpasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rm)
    {
        if (($model = Publicpasien::findOne(['no_rm' => $no_rm])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
