<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportbahasa */

$this->title = 'Update Supportbahasa: ' . $model->kd_bahasa;
$this->params['breadcrumbs'][] = ['label' => 'Supportbahasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bahasa, 'url' => ['view', 'kd_bahasa' => $model->kd_bahasa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportbahasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
