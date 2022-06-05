<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicpasien-form card card-info">

<div class="card-header">
            <h3 class="card-title"><?= Html::encode($this->title)?></h3>
        </div>
            <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>


                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportjenispasien::find()
                        ->asArray()->all(), 'kd_jenis_pasien', 'jenis_pasien');
                    echo $form->field($model, 'kd_jenis_pasien')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_jenis_pasien'=>'kd_jenis_pasien']
                    );
                    ?>

            <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportjeniskelamin::find()
                        ->asArray()->all(), 'kd_jenis_kelamin', 'jenis_kelamin');
                    echo $form->field($model, 'kd_jenis_kelamin')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_jenis_kelamin'=>'kd_jenis_kelamin']
                    );
                    ?>

            <!-- $form->field($model, 'kd_kota_lahir')->textInput(['maxlength' => true]) ?> -->

            <?php 
            // echo $form->field($model, 'kd_kota_lahir')->widget(Select2::classname(), [
            // 'data' => $model,
            // 'options' => ['placeholder' => 'Select a state ...'],
            // 'pluginOptions' => [
            // 'allowClear' => true
            // ],
            // ]);
            ?>

            <?= $form->field($model, 'tgl_lahir')->textInput() ?>

            <!-- <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="tgl_lahir" inputmode="numeric">
                  </div> -->


            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

            <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportprovinsi::find()
                        ->asArray()->all(), 'kdprovinsi', 'provinsi');
                    echo $form->field($model, 'kd_provinsi')
                    ->dropDownList(
                    $dataPost,           
                    ['kdprovinsi'=>'kdprovinsi']
                    );
                    ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportkabupaten::find()
                        ->asArray()->all(), 'kdkabupaten', 'kabupaten');
                    echo $form->field($model, 'kd_kota_alamat')
                    ->dropDownList(
                    $dataPost,           
                    ['kdkabupaten'=>'kdkabupaten']
                    );
                    ?>

            
                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportagama::find()
                        ->asArray()->all(), 'kd_agama', 'agama');
                    echo $form->field($model, 'kd_agama')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_agama'=>'kd_agama']
                    );
                    ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportstatuskawin::find()
                        ->asArray()->all(), 'kd_status_kawin', 'status_kawin');
                    echo $form->field($model, 'kd_status_kawin')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_status_kawin'=>'kd_status_kawin']
                    );
                    ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportpendidikan::find()
                        ->asArray()->all(), 'kd_pendidikan', 'pendidikan');
                    echo $form->field($model, 'kd_pendidikan')
                    ->dropDownList(
                    $dataPost,           
                    ['kd_pendidikan'=>'kd_pendidikan']
                    );
                    ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportpekerjaan::find()
                    ->asArray()->all(), 'kd_pekerjaan', 'pekerjaan');
                    echo $form->field($model, 'kd_pekerjaan')
                        ->dropDownList(
                            $dataPost,           
                            ['kd_pekerjaan'=>'kd_pekerjaan']
                    );
                    ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportsuku::find()
                    ->asArray()->all(), 'kd_suku', 'suku');
                    echo $form->field($model, 'kd_suku')
                        ->dropDownList(
                            $dataPost,           
                            ['kd_suku'=>'kd_suku']
                    );
                    ?>

                    <?php
                    $dataPost=ArrayHelper::map(\app\models\Supportbahasa::find()
                    ->asArray()->all(), 'kd_bahasa', 'bahasa');
                    echo $form->field($model, 'kd_bahasa')
                        ->dropDownList(
                            $dataPost,           
                            ['kd_bahasa'=>'kd_bahasa']
                    );
                    ?>
            <?= $form->field($model, 'notelp')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'kd_kecamatan')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'kd_desa')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>

                <div class="card-footer">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            <?php ActiveForm::end(); ?>
    </div>
</div>
