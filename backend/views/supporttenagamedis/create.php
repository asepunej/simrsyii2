<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supporttenagamedis */

$this->title = 'Create Supporttenagamedis';
$this->params['breadcrumbs'][] = ['label' => 'Supporttenagamedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supporttenagamedis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
