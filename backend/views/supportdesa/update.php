<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportdesa */

$this->title = 'Update Supportdesa: ' . $model->kddesa;
$this->params['breadcrumbs'][] = ['label' => 'Supportdesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kddesa, 'url' => ['view', 'kddesa' => $model->kddesa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportdesa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
