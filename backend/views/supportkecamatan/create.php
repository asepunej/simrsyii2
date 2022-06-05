<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkecamatan */

$this->title = 'Create Supportkecamatan';
$this->params['breadcrumbs'][] = ['label' => 'Supportkecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportkecamatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
