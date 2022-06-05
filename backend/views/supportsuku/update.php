<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportsuku */

$this->title = 'Update Supportsuku: ' . $model->kd_suku;
$this->params['breadcrumbs'][] = ['label' => 'Supportsukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_suku, 'url' => ['view', 'kd_suku' => $model->kd_suku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportsuku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
