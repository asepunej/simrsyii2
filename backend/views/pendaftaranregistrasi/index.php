<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PendaftaranregistrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrasi';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaranregistrasi-index content">


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

                        'id_registrasi',
                        'no_rm',
                        'kd_jenis_pasien',
                        'kd_rujukan',
                        'doker_rujukan',
                        //'kd_Faskes_rujukan',
                        //'kd_rs_rujukan',
                        //'kd_jenis_pembayaran',
                        //'kd_klinik',
                        //'id_medis',
                        //'id_petugas',
                        //'id_user',
                        //'tgl',
                        //'kd_klinik_reg',


                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id_registrasi' => $model->id_registrasi]);
                                }

                            ],
                        ],
                    ]); ?>

                </div>      
            </div>
        </div>
    </div>
</div>
