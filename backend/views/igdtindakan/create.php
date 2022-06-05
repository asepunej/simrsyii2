<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igdtindakan */

$this->title = 'Create Igdtindakan';
$this->params['breadcrumbs'][] = ['label' => 'Igdtindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igdtindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
