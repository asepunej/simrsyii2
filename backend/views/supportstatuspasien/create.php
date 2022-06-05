<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportstatuspasien */

$this->title = 'Create Supportstatuspasien';
$this->params['breadcrumbs'][] = ['label' => 'Supportstatuspasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportstatuspasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
