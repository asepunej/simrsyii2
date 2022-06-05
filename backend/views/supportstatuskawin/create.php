<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportstatuskawin */

$this->title = 'Create Supportstatuskawin';
$this->params['breadcrumbs'][] = ['label' => 'Supportstatuskawins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportstatuskawin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
