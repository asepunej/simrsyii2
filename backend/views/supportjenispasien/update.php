<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenispasien */

$this->title = 'Update Supportjenispasien: ' . $model->kd_jenis_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Supportjenispasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_pasien, 'url' => ['view', 'kd_jenis_pasien' => $model->kd_jenis_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportjenispasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
