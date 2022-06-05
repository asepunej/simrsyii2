<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasipoli */

$this->title = 'Create Publicregistrasipoli';
$this->params['breadcrumbs'][] = ['label' => 'Publicregistrasipolis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicregistrasipoli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
