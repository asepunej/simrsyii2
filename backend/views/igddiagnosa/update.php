<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igddiagnosa */

$this->title = 'Update Igddiagnosa: ' . $model->id_diagnosa;
$this->params['breadcrumbs'][] = ['label' => 'Igddiagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_diagnosa, 'url' => ['view', 'id_diagnosa' => $model->id_diagnosa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="igddiagnosa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
