<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenispasien */

$this->title = 'Create Supportjenispasien';
$this->params['breadcrumbs'][] = ['label' => 'Supportjenispasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportjenispasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
