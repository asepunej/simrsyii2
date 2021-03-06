<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Igdkonsul */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igdkonsul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_register')->textInput() ?>

    <?= $form->field($model, 'kd_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
