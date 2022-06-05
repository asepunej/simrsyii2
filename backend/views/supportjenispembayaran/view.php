<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenispembayaran */

$this->title = $model->kd_jenis_pembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Supportjenispembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportjenispembayaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_jenis_pembayaran' => $model->kd_jenis_pembayaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_jenis_pembayaran' => $model->kd_jenis_pembayaran], [
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
            'kd_jenis_pembayaran',
            'jenis_pembayaran',
        ],
    ]) ?>

</div>
