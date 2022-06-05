<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjeniskelamin */

$this->title = 'Create Supportjeniskelamin';
$this->params['breadcrumbs'][] = ['label' => 'Supportjeniskelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportjeniskelamin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
