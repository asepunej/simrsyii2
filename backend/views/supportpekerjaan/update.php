<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpekerjaan */

$this->title = 'Update Supportpekerjaan: ' . $model->kd_pekerjaan;
$this->params['breadcrumbs'][] = ['label' => 'Supportpekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pekerjaan, 'url' => ['view', 'kd_pekerjaan' => $model->kd_pekerjaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportpekerjaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
