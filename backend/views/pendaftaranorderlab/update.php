<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranorderlab */

$this->title = 'Update Pendaftaranorderlab: ' . $model->id_order;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaranorderlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_order, 'url' => ['view', 'id_order' => $model->id_order]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaranorderlab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
