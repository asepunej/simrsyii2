<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasipoli */

$this->title = 'Update Publicregistrasipoli: ' . $model->id_registrasi_poli;
$this->params['breadcrumbs'][] = ['label' => 'Publicregistrasipolis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_registrasi_poli, 'url' => ['view', 'id_registrasi_poli' => $model->id_registrasi_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicregistrasipoli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
