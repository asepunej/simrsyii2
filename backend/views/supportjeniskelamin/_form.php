<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjeniskelamin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportjeniskelamin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
