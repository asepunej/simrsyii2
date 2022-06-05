<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportsuku */

$this->title = 'Create Supportsuku';
$this->params['breadcrumbs'][] = ['label' => 'Supportsukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportsuku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
