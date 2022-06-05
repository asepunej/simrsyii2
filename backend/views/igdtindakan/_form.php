<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Igdtindakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igdtindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_registrasi')->textInput() ?>

    <?= $form->field($model, 'icd9')->textInput() ?>

    <?= $form->field($model, 'kd_icd9')->textInput() ?>

    <?= $form->field($model, 'kd_tindakan')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
