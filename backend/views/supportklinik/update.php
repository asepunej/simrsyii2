<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportklinik */

$this->title = 'Update Supportklinik: ' . $model->kd_klinik;
$this->params['breadcrumbs'][] = ['label' => 'Supportkliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_klinik, 'url' => ['view', 'kd_klinik' => $model->kd_klinik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportklinik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
