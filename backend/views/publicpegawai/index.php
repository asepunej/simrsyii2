<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publicpegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicpegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Publicpegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pegawai',
            'nip',
            'nama',
            'kd_jenis_kelamin',
            'tempat_lahir',
            //'tgl_lahir',
            //'kd_agama',
            //'alamat_rumah',
            //'kota',
            //'no_hp',
            //'no_telepon',
            //'kd_jabatan',
            //'kd_unit_kerja',
            //'kd_status_aktif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                 }
            ],
        ],
    ]); ?>


</div>
