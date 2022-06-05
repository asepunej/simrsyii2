<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranpinjamrm */

$this->title = 'Update Pendaftaranpinjamrm: ' . $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaranpinjamrms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pinjam, 'url' => ['view', 'id_pinjam' => $model->id_pinjam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaranpinjamrm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
