<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenisklinik */

$this->title = 'Create Supportjenisklinik';
$this->params['breadcrumbs'][] = ['label' => 'Supportjeniskliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportjenisklinik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
