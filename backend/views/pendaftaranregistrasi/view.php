<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranregistrasi */

$this->title = $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran registrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pendaftaranregistrasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_registrasi' => $model->id_registrasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_registrasi' => $model->id_registrasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah Anda Yakin Untuk Menghapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_registrasi',
            'no_rm',
            'kd_jenis_pasien',
            'kd_rujukan',
            'doker_rujukan',
            'kd_Faskes_rujukan',
            'kd_rs_rujukan',
            'kd_jenis_pembayaran',
            'kd_klinik',
            'id_medis',
            'id_petugas',
            'id_user',
            'tgl',
            'kd_klinik_reg',
        ],
    ]) ?>

</div>
