<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpasien */

$this->title = 'Ubah Data Pasien: ' . $model->no_rm;
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rm, 'url' => ['view', 'no_rm' => $model->no_rm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicpasien-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
