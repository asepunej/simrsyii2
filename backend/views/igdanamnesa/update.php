<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igdanamnesa */

$this->title = 'Update Igdanamnesa: ' . $model->id_anamnesa;
$this->params['breadcrumbs'][] = ['label' => 'Igdanamnesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_anamnesa, 'url' => ['view', 'id_anamnesa' => $model->id_anamnesa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="igdanamnesa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
