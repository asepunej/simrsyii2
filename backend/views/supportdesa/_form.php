<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportdesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportdesa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kddesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdkecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
