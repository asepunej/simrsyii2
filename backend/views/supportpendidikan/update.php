<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpendidikan */

$this->title = 'Update Supportpendidikan: ' . $model->kd_pendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Supportpendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pendidikan, 'url' => ['view', 'kd_pendidikan' => $model->kd_pendidikan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportpendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
