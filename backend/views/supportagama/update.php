<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportagama */

$this->title = 'Update Supportagama: ' . $model->kd_agama;
$this->params['breadcrumbs'][] = ['label' => 'Supportagamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_agama, 'url' => ['view', 'kd_agama' => $model->kd_agama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportagama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
