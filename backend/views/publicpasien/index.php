<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicpasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran pasien';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicpasien-index content">

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><h4><?= Html::encode($this->title) ?></h4></div>
                    <div class="card-tools">
                    <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Pendaftaran Pasien', ['create'], ['class' => 'btn btn-success btn-sm waves-effect waves-light']) ?>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'no_rm',
                            // 'supportjenispasien.jenis_pasien',
                            [
                                'attribute' => 'jenis_pasien',
                                'value' => function($model){
                                    return $model->supportjenispasien->jenis_pasien;
                                }
                            ],
                            // 'nik',
                            'nama',
                            // 'supportjeniskelamin.jenis_kelamin',
                            [
                                'attribute' => 'jenis_kelamin',
                                'value' => function($model){
                                    return $model->supportjeniskelamin->jenis_kelamin;
                                }
                            ],

                            //'kd_kota_lahir',
                            //'tgl_lahir',
                            //'alamat',
                            //'kd_agama',
                            //'kd_status_kawin',
                            //'kd_pendidikan',
                            //'kd_pekerjaan',
                            //'kd_suku',
                            //'kd_bahasa',
                            //'notelp',
                            // 'nama_pj',
                            //'kd_provinsi',
                            //'kd_kota_alamat',
                            //'kd_kecamatan',
                            //'kd_desa',
                            //'rt',
                            //'rw',
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'no_rm' => $model->no_rm]);
                                },
                            ],
                        ],
                    ]); ?>

                </div>      
            </div>
        </div>
    </div>
</div>
