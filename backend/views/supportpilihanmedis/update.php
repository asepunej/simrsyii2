<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpilihanmedis */

$this->title = 'Update Supportpilihanmedis: ' . $model->kd_pilihan_medis;
$this->params['breadcrumbs'][] = ['label' => 'Supportpilihanmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pilihan_medis, 'url' => ['view', 'kd_pilihan_medis' => $model->kd_pilihan_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportpilihanmedis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
