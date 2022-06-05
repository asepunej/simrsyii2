<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjabatan */

$this->title = 'Update Supportjabatan: ' . $model->kd_jabatan;
$this->params['breadcrumbs'][] = ['label' => 'Supportjabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jabatan, 'url' => ['view', 'kd_jabatan' => $model->kd_jabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportjabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
