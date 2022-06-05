<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igddiagnosa */

$this->title = 'Create Igddiagnosa';
$this->params['breadcrumbs'][] = ['label' => 'Igddiagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igddiagnosa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
