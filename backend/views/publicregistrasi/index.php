<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicregistrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publicregistrasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicregistrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Publicregistrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_registrasi',
            'no_rm',
            'kd_jenis_daftar',
            'kd_rujukan',
            'doker_rujukan',
            //'kd_Faskes_rujukan',
            //'kd_rs_rujukan',
            //'kd_jenis_pembayaran',
            //'kd_klinik_tujuan',
            //'id_pilmedis',
            //'id_petugas',
            //'id_user',
            //'tgl',
            //'kd_asuransi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_registrasi' => $model->id_registrasi]);
                 }
            ],
        ],
    ]); ?>


</div>
