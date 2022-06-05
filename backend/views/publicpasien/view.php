<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpasien */

$this->title = $model->no_rm;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>
<div class="publicpasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rm' => $model->no_rm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rm' => $model->no_rm], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apa Anda Yakin Untuk Menghapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_rm',
            'supportjenispasien.jenis_pasien',
            'nik',
            'nama',
            'supportjeniskelamin.jenis_kelamin',
            'kd_kota_lahir',
            'tgl_lahir',
            'alamat',
            'supportagama.agama',
            'supportstatuskawin.status_kawin',
            'supportpendidikan.pendidikan',
            'supportpekerjaan.pekerjaan',
            'supportsuku.suku',
            'supportbahasa.bahasa',
            'notelp',
            'nama_pj',
            'supportprovinsi.provinsi',
            'supportkabupaten.kabupaten',
            'kd_kecamatan',
            'kd_desa',
            'rt',
            'rw',
        ],
    ]) ?>

</div>
