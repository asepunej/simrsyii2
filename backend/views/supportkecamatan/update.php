<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkecamatan */

$this->title = 'Update Supportkecamatan: ' . $model->kdkecamatan;
$this->params['breadcrumbs'][] = ['label' => 'Supportkecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kdkecamatan, 'url' => ['view', 'kdkecamatan' => $model->kdkecamatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportkecamatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
