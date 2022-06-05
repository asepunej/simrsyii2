<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportdesa */

$this->title = 'Create Supportdesa';
$this->params['breadcrumbs'][] = ['label' => 'Supportdesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportdesa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
