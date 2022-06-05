<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupportklinikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supportklinik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_klinik') ?>

    <?= $form->field($model, 'klinik') ?>

    <?= $form->field($model, 'integrasi')->checkbox() ?>

    <?= $form->field($model, 'penunjang')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
