<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportprovinsi */

$this->title = 'Update Supportprovinsi: ' . $model->kdprovinsi;
$this->params['breadcrumbs'][] = ['label' => 'Supportprovinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kdprovinsi, 'url' => ['view', 'kdprovinsi' => $model->kdprovinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportprovinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
