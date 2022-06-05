<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpendidikan */

$this->title = 'Create Supportpendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Supportpendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportpendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
