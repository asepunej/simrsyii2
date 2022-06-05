<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranregistrasi */

$this->title = 'Pendaftaran pasien';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran registrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaranregistrasi-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
