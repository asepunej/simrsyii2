<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranregistrasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaranregistrasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_registrasi') ?>

    <?= $form->field($model, 'no_rm') ?>

    <?= $form->field($model, 'kd_jenis_pasien') ?>

    <?= $form->field($model, 'kd_rujukan') ?>

    <?= $form->field($model, 'doker_rujukan') ?>

    <?php // echo $form->field($model, 'kd_Faskes_rujukan') ?>

    <?php // echo $form->field($model, 'kd_rs_rujukan') ?>

    <?php // echo $form->field($model, 'kd_jenis_pembayaran') ?>

    <?php // echo $form->field($model, 'kd_klinik') ?>

    <?php // echo $form->field($model, 'id_medis') ?>

    <?php // echo $form->field($model, 'id_petugas') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'tgl') ?>

    <?php // echo $form->field($model, 'kd_klinik_reg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
