<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportuser */

$this->title = 'Create Supportuser';
$this->params['breadcrumbs'][] = ['label' => 'Supportusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
