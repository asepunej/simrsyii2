<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicuser */

$this->title = 'Create Publicuser';
$this->params['breadcrumbs'][] = ['label' => 'Publicusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
