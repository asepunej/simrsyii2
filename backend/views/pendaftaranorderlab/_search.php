<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranorderlabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaranorderlab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_order') ?>

    <?= $form->field($model, 'no_order') ?>

    <?= $form->field($model, 'kd_pengirim') ?>

    <?= $form->field($model, 'nama_pengirim') ?>

    <?= $form->field($model, 'id_pekerjaan1') ?>

    <?php // echo $form->field($model, 'id_pekerjaan2') ?>

    <?php // echo $form->field($model, 'id_pekerjaan3') ?>

    <?php // echo $form->field($model, 'id_petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
