<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpegawai */

$this->title = 'Update Publicpegawai: ' . $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Publicpegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id_pegawai' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicpegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
