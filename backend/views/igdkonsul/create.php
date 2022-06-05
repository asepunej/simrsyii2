<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igdkonsul */

$this->title = 'Create Igdkonsul';
$this->params['breadcrumbs'][] = ['label' => 'Igdkonsuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igdkonsul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
