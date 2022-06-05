<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkecamatan */

$this->title = $model->kdkecamatan;
$this->params['breadcrumbs'][] = ['label' => 'Supportkecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportkecamatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kdkecamatan' => $model->kdkecamatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kdkecamatan' => $model->kdkecamatan], [
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
            'kdkecamatan',
            'kdkabupaten',
            'kecamatan',
        ],
    ]) ?>

</div>
