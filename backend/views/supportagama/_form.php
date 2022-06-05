<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportagama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportagama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
