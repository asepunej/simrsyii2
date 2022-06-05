<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportstatuspasien */

$this->title = 'Update Supportstatuspasien: ' . $model->kd_status_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Supportstatuspasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_status_pasien, 'url' => ['view', 'kd_status_pasien' => $model->kd_status_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportstatuspasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
