<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportklinik */

$this->title = 'Create Supportklinik';
$this->params['breadcrumbs'][] = ['label' => 'Supportkliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportklinik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
