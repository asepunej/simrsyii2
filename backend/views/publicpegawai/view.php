<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpegawai */

$this->title = $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Publicpegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="publicpegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pegawai' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pegawai' => $model->id_pegawai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pegawai',
            'nip',
            'nama',
            'kd_jenis_kelamin',
            'tempat_lahir',
            'tgl_lahir',
            'kd_agama',
            'alamat_rumah',
            'kota',
            'no_hp',
            'no_telepon',
            'kd_jabatan',
            'kd_unit_kerja',
            'kd_status_aktif',
        ],
    ]) ?>

</div>
