<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjeniskelamin */

$this->title = 'Update Supportjeniskelamin: ' . $model->kd_jenis_kelamin;
$this->params['breadcrumbs'][] = ['label' => 'Supportjeniskelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_kelamin, 'url' => ['view', 'kd_jenis_kelamin' => $model->kd_jenis_kelamin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportjeniskelamin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
