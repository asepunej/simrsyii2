<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportagama */

$this->title = 'Create Supportagama';
$this->params['breadcrumbs'][] = ['label' => 'Supportagamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportagama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
