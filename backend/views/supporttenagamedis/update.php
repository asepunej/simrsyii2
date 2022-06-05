<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supporttenagamedis */

$this->title = 'Update Supporttenagamedis: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Supporttenagamedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supporttenagamedis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
