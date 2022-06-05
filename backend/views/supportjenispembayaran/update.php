<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenispembayaran */

$this->title = 'Update Supportjenispembayaran: ' . $model->kd_jenis_pembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Supportjenispembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_pembayaran, 'url' => ['view', 'kd_jenis_pembayaran' => $model->kd_jenis_pembayaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportjenispembayaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
