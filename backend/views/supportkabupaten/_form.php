<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkabupaten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportkabupaten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdkabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdprovinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
