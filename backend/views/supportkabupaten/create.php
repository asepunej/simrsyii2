<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkabupaten */

$this->title = 'Create Supportkabupaten';
$this->params['breadcrumbs'][] = ['label' => 'Supportkabupatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportkabupaten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
