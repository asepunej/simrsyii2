<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Igddiagnosa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igddiagnosa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kasus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd10')->textInput() ?>

    <?= $form->field($model, 'kd_icd10')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_registrasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
