<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenisdaftar */

$this->title = 'Create Supportjenisdaftar';
$this->params['breadcrumbs'][] = ['label' => 'Supportjenisdaftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportjenisdaftar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
