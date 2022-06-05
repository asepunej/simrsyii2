<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranregistrasi */

$this->title = 'Update Pendaftaran registrasi: ' . $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran registrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_registrasi, 'url' => ['view', 'id_registrasi' => $model->id_registrasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaranregistrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
