<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasipoli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicregistrasipoli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_registrasi')->textInput() ?>

    <?= $form->field($model, 'id_klinik')->textInput() ?>

    <?= $form->field($model, 'no_antrian')->textInput() ?>

    <?= $form->field($model, 'tgl')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
