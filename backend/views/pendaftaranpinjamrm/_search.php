<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranpinjamrmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaranpinjamrm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pinjam') ?>

    <?= $form->field($model, 'kd_peminjam') ?>

    <?= $form->field($model, 'id_peminjam') ?>

    <?= $form->field($model, 'nama_peminjam') ?>

    <?= $form->field($model, 'no_rm') ?>

    <?php // echo $form->field($model, 'kd_keperluan') ?>

    <?php // echo $form->field($model, 'kd_klinik') ?>

    <?php // echo $form->field($model, 'nama_DPJP') ?>

    <?php // echo $form->field($model, 'tgl_pinjam') ?>

    <?php // echo $form->field($model, 'tgl_kembali') ?>

    <?php // echo $form->field($model, 'id_petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
