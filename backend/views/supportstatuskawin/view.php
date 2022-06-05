<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportstatuskawin */

$this->title = $model->kd_status_kawin;
$this->params['breadcrumbs'][] = ['label' => 'Supportstatuskawins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportstatuskawin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_status_kawin' => $model->kd_status_kawin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_status_kawin' => $model->kd_status_kawin], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_status_kawin',
            'status_kawin',
        ],
    ]) ?>

</div>
