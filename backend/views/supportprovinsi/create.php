<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportprovinsi */

$this->title = 'Create Supportprovinsi';
$this->params['breadcrumbs'][] = ['label' => 'Supportprovinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportprovinsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
