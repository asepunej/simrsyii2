<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PendaftaranpinjamrmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaranpinjamrms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaranpinjamrm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendaftaranpinjamrm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            'kd_peminjam',
            'id_peminjam',
            'nama_peminjam',
            'no_rm',
            //'kd_keperluan',
            //'kd_klinik',
            //'nama_DPJP',
            //'tgl_pinjam',
            //'tgl_kembali',
            //'id_petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pinjam' => $model->id_pinjam]);
                 }
            ],
        ],
    ]); ?>


</div>
