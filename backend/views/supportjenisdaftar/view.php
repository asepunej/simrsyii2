<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenisdaftar */

$this->title = $model->kd_jenis_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Supportjenisdaftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportjenisdaftar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_jenis_daftar' => $model->kd_jenis_daftar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_jenis_daftar' => $model->kd_jenis_daftar], [
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
            'kd_jenis_daftar',
            'jenis_daftar',
        ],
    ]) ?>

</div>
