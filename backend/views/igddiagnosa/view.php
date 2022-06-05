<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Igddiagnosa */

$this->title = $model->id_diagnosa;
$this->params['breadcrumbs'][] = ['label' => 'Igddiagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="igddiagnosa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_diagnosa' => $model->id_diagnosa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_diagnosa' => $model->id_diagnosa], [
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
            'id_diagnosa',
            'kd_kasus',
            'icd10',
            'kd_icd10',
            'keterangan',
            'id_registrasi',
        ],
    ]) ?>

</div>
