<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportdesa */

$this->title = $model->kddesa;
$this->params['breadcrumbs'][] = ['label' => 'Supportdesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportdesa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kddesa' => $model->kddesa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kddesa' => $model->kddesa], [
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
            'kddesa',
            'kdkecamatan',
            'desa',
        ],
    ]) ?>

</div>
