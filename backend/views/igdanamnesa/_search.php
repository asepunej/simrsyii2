<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IgdanamnesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igdanamnesa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_anamnesa') ?>

    <?= $form->field($model, 'anamnesa') ?>

    <?= $form->field($model, 'bb') ?>

    <?= $form->field($model, 'tt') ?>

    <?= $form->field($model, 'index') ?>

    <?php // echo $form->field($model, 'kd_kesadaran') ?>

    <?php // echo $form->field($model, 'td_sistole') ?>

    <?php // echo $form->field($model, 'td_diatole') ?>

    <?php // echo $form->field($model, 'heart_rate') ?>

    <?php // echo $form->field($model, 'respirasi_rate') ?>

    <?php // echo $form->field($model, 'hasil_periksa') ?>

    <?php // echo $form->field($model, 'id_registrasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
