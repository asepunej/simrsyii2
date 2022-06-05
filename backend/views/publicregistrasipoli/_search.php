<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PublicregistrasipoliSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicregistrasipoli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_registrasi_poli') ?>

    <?= $form->field($model, 'id_registrasi') ?>

    <?= $form->field($model, 'id_klinik') ?>

    <?= $form->field($model, 'no_antrian') ?>

    <?= $form->field($model, 'tgl') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
