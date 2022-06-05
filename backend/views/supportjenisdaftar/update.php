<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenisdaftar */

$this->title = 'Update Supportjenisdaftar: ' . $model->kd_jenis_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Supportjenisdaftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_daftar, 'url' => ['view', 'kd_jenis_daftar' => $model->kd_jenis_daftar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportjenisdaftar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
