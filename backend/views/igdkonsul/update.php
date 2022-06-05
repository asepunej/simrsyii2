<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igdkonsul */

$this->title = 'Update Igdkonsul: ' . $model->id_konsul;
$this->params['breadcrumbs'][] = ['label' => 'Igdkonsuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_konsul, 'url' => ['view', 'id_konsul' => $model->id_konsul]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="igdkonsul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
