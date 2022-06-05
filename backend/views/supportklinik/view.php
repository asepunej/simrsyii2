<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportklinik */

$this->title = $model->kd_klinik;
$this->params['breadcrumbs'][] = ['label' => 'Supportkliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportklinik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_klinik' => $model->kd_klinik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_klinik' => $model->kd_klinik], [
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
            'kd_klinik',
            'klinik',
            'integrasi:boolean',
            'penunjang:boolean',
        ],
    ]) ?>

</div>
