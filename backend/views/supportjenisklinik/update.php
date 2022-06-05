<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenisklinik */

$this->title = 'Update Supportjenisklinik: ' . $model->kd_jenis_klinik;
$this->params['breadcrumbs'][] = ['label' => 'Supportjeniskliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_klinik, 'url' => ['view', 'kd_jenis_klinik' => $model->kd_jenis_klinik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportjenisklinik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
