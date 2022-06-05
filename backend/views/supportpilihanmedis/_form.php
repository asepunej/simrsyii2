<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpilihanmedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportpilihanmedis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pilihan_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pilihan_medis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
