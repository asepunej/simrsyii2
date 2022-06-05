<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasi */

$this->title = $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Publicregistrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="publicregistrasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_registrasi' => $model->id_registrasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_registrasi' => $model->id_registrasi], [
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
            'id_registrasi',
            'no_rm',
            'kd_jenis_daftar',
            'kd_rujukan',
            'doker_rujukan',
            'kd_Faskes_rujukan',
            'kd_rs_rujukan',
            'kd_jenis_pembayaran',
            'kd_klinik_tujuan',
            'id_pilmedis',
            'id_petugas',
            'id_user',
            'tgl',
            'kd_asuransi',
        ],
    ]) ?>

</div>
