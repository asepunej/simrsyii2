<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjabatan */

$this->title = 'Create Supportjabatan';
$this->params['breadcrumbs'][] = ['label' => 'Supportjabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportjabatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
