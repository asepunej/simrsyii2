<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaranpinjamrm */

$this->title = 'Create Pendaftaranpinjamrm';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaranpinjamrms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaranpinjamrm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
