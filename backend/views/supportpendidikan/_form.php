<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportpendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
