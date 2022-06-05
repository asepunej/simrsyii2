<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkabupaten */

$this->title = 'Update Supportkabupaten: ' . $model->kdkabupaten;
$this->params['breadcrumbs'][] = ['label' => 'Supportkabupatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kdkabupaten, 'url' => ['view', 'kdkabupaten' => $model->kdkabupaten]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportkabupaten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
