<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportbahasa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportbahasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_bahasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bahasa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
