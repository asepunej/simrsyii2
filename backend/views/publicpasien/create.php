<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicpasien */

$this->title = 'Pendaftaran Pasien';
// $this->params['breadcrumbs'][] = ['label' => 'Publicpasiens', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicpasien-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
