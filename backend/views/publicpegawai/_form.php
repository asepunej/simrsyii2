<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicpegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'kd_jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput() ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'kd_agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_rumah')->textInput() ?>

    <?= $form->field($model, 'kota')->textInput() ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_unit_kerja')->textInput() ?>

    <?= $form->field($model, 'kd_status_aktif')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
