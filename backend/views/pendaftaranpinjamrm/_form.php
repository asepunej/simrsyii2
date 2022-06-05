<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranpinjamrm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaranpinjamrm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_peminjam')->textInput() ?>

    <?= $form->field($model, 'nama_peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rm')->textInput() ?>

    <?= $form->field($model, 'kd_keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_DPJP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pinjam')->textInput() ?>

    <?= $form->field($model, 'tgl_kembali')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
