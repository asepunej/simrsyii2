<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportstatuskawin */

$this->title = 'Update Supportstatuskawin: ' . $model->kd_status_kawin;
$this->params['breadcrumbs'][] = ['label' => 'Supportstatuskawins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_status_kawin, 'url' => ['view', 'kd_status_kawin' => $model->kd_status_kawin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportstatuskawin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
