<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Igdanamnesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igdanamnesa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anamnesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput() ?>

    <?= $form->field($model, 'tt')->textInput() ?>

    <?= $form->field($model, 'index')->textInput() ?>

    <?= $form->field($model, 'kd_kesadaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td_sistole')->textInput() ?>

    <?= $form->field($model, 'td_diatole')->textInput() ?>

    <?= $form->field($model, 'heart_rate')->textInput() ?>

    <?= $form->field($model, 'respirasi_rate')->textInput() ?>

    <?= $form->field($model, 'hasil_periksa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_registrasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
