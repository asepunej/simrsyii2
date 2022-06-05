<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpilihanmedis */

$this->title = 'Create Supportpilihanmedis';
$this->params['breadcrumbs'][] = ['label' => 'Supportpilihanmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportpilihanmedis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
