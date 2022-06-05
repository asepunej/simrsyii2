<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupportuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supportusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportuser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supportuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_user',
            'username',
            'pasword',
            'id_pegawai',
            'kd_klinik',
            //'kd_jabatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_user' => $model->id_user]);
                 }
            ],
        ],
    ]); ?>


</div>
