<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportprovinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportprovinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdprovinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
