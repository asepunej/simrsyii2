<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranorderlab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaranorderlab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_order')->textInput() ?>

    <?= $form->field($model, 'kd_pengirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pengirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pekerjaan1')->textInput() ?>

    <?= $form->field($model, 'id_pekerjaan2')->textInput() ?>

    <?= $form->field($model, 'id_pekerjaan3')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
