<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IgdtindakanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="igdtindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'id_registrasi') ?>

    <?= $form->field($model, 'icd9') ?>

    <?= $form->field($model, 'kd_icd9') ?>

    <?= $form->field($model, 'kd_tindakan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
