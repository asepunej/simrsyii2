<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportbahasa */

$this->title = 'Create Supportbahasa';
$this->params['breadcrumbs'][] = ['label' => 'Supportbahasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportbahasa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
