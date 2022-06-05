<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpekerjaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportpekerjaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
