<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Igdanamnesa */

$this->title = 'Create Igdanamnesa';
$this->params['breadcrumbs'][] = ['label' => 'Igdanamnesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igdanamnesa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
