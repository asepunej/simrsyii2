<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranregistrasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaranregistrasi-form card card-info">

    <?php $form = ActiveForm::begin(); ?>
    
    
    <div class="card-header">
            <h3 class="card-title"><?= Html::encode($this->title)?></h3>
        </div>
            <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'no_rm')->textInput() ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportjenispasien::find()
                        ->asArray()->all(), 'kd_jenis_pasien', 'jenis_pasien');
                    echo $form->field($model, 'kd_jenis_daftar')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_jenis_pasien'=>'kd_jenis_pasien']
                    );
                    ?>

                    <?= $form->field($model, 'kd_rujukan')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'doker_rujukan')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'kd_Faskes_rujukan')->textInput() ?>

                    <?= $form->field($model, 'kd_rs_rujukan')->textInput() ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportjenispembayaran::find()
                        ->asArray()->all(), 'kd_jenis_pembayaran', 'jenis_pembayaran');
                    echo $form->field($model, 'kd_jenis_pembayaran')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_jenis_pembayaran'=>'kd_jenis_pembayaran']
                    );
                    ?>

                    <?= $form->field($model, 'kd_klinik')->textInput(['maxlength' => true]) ?>


                    <?= $form->field($model, 'id_medis')->textInput() ?>

                    <?= $form->field($model, 'id_petugas')->textInput() ?>

                    <?= $form->field($model, 'id_user')->textInput() ?>

                    <?= $form->field($model, 'tgl')->textInput() ?>

                    <?= $form->field($model, 'kd_klinik_reg')->textInput(['maxlength' => true]) ?>
                    
                <div class="card-footer">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>
