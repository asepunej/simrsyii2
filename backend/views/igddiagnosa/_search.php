<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IgddiagnosaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igddiagnosa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_diagnosa') ?>

    <?= $form->field($model, 'kd_kasus') ?>

    <?= $form->field($model, 'icd10') ?>

    <?= $form->field($model, 'kd_icd10') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'id_registrasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
