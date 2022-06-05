<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicregistrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rm')->textInput() ?>

    <?= $form->field($model, 'kd_jenis_daftar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doker_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_Faskes_rujukan')->textInput() ?>

    <?= $form->field($model, 'kd_rs_rujukan')->textInput() ?>

    <?= $form->field($model, 'kd_jenis_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_klinik_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pilmedis')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'tgl')->textInput() ?>

    <?= $form->field($model, 'kd_asuransi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
