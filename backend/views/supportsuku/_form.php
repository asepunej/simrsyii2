<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportsuku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportsuku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_suku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suku')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
