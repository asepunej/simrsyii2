<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportunitkerja */

$this->title = 'Update Supportunitkerja: ' . $model->kdunitkerja;
$this->params['breadcrumbs'][] = ['label' => 'Supportunitkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kdunitkerja, 'url' => ['view', 'kdunitkerja' => $model->kdunitkerja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportunitkerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
