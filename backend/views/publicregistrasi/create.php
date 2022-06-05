<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasi */

$this->title = 'Create Publicregistrasi';
$this->params['breadcrumbs'][] = ['label' => 'Publicregistrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicregistrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
