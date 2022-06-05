<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportjenisklinik */

$this->title = $model->kd_jenis_klinik;
$this->params['breadcrumbs'][] = ['label' => 'Supportjeniskliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportjenisklinik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_jenis_klinik' => $model->kd_jenis_klinik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_jenis_klinik' => $model->kd_jenis_klinik], [
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
            'kd_jenis_klinik',
            'jenis_klinik',
        ],
    ]) ?>

</div>
