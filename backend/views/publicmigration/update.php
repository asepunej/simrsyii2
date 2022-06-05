<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicmigration */

$this->title = 'Update Publicmigration: ' . $model->version;
$this->params['breadcrumbs'][] = ['label' => 'Publicmigrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->version, 'url' => ['view', 'version' => $model->version]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicmigration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
