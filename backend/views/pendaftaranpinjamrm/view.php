<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranpinjamrm */

$this->title = $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaranpinjamrms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pendaftaranpinjamrm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pinjam' => $model->id_pinjam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pinjam' => $model->id_pinjam], [
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
            'id_pinjam',
            'kd_peminjam',
            'id_peminjam',
            'nama_peminjam',
            'no_rm',
            'kd_keperluan',
            'kd_klinik',
            'nama_DPJP',
            'tgl_pinjam',
            'tgl_kembali',
            'id_petugas',
        ],
    ]) ?>

</div>
