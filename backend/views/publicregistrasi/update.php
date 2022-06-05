<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasi */

$this->title = 'Update Publicregistrasi: ' . $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Publicregistrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_registrasi, 'url' => ['view', 'id_registrasi' => $model->id_registrasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicregistrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
