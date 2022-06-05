<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpekerjaan */

$this->title = 'Create Supportpekerjaan';
$this->params['breadcrumbs'][] = ['label' => 'Supportpekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportpekerjaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
