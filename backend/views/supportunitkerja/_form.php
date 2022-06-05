<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supportunitkerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportunitkerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdunitkerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unitkerja')->textInput() ?>

    <?= $form->field($model, 'pelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaanawal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
