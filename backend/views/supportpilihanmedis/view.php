<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportpilihanmedis */

$this->title = $model->kd_pilihan_medis;
$this->params['breadcrumbs'][] = ['label' => 'Supportpilihanmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportpilihanmedis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_pilihan_medis' => $model->kd_pilihan_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_pilihan_medis' => $model->kd_pilihan_medis], [
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
            'kd_pilihan_medis',
            'pilihan_medis',
        ],
    ]) ?>

</div>
