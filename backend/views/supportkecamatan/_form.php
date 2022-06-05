<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportkecamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdkecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdkabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
