<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportklinik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportklinik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klinik')->textInput() ?>

    <?= $form->field($model, 'integrasi')->checkbox() ?>

    <?= $form->field($model, 'penunjang')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
