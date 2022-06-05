<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PublicpasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicpasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rm') ?>

    <?= $form->field($model, 'kd_jenis_pasien') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'kd_jenis_kelamin') ?>

    <?php // echo $form->field($model, 'kd_kota_lahir') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kd_agama') ?>

    <?php // echo $form->field($model, 'kd_status_kawin') ?>

    <?php // echo $form->field($model, 'kd_pendidikan') ?>

    <?php // echo $form->field($model, 'kd_pekerjaan') ?>

    <?php // echo $form->field($model, 'kd_suku') ?>

    <?php // echo $form->field($model, 'kd_bahasa') ?>

    <?php // echo $form->field($model, 'notelp') ?>

    <?php // echo $form->field($model, 'nama_pj') ?>

    <?php // echo $form->field($model, 'kd_provinsi') ?>

    <?php // echo $form->field($model, 'kd_kota_alamat') ?>

    <?php // echo $form->field($model, 'kd_kecamatan') ?>

    <?php // echo $form->field($model, 'kd_desa') ?>

    <?php // echo $form->field($model, 'rt') ?>

    <?php // echo $form->field($model, 'rw') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
