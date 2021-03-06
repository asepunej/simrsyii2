<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supportuser */

$this->title = 'Update Supportuser: ' . $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Supportusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id_user' => $model->id_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supportuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
