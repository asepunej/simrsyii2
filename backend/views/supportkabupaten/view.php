<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportkabupaten */

$this->title = $model->kdkabupaten;
$this->params['breadcrumbs'][] = ['label' => 'Supportkabupatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportkabupaten-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kdkabupaten' => $model->kdkabupaten], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kdkabupaten' => $model->kdkabupaten], [
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
            'kdkabupaten',
            'kdprovinsi',
            'kabupaten',
        ],
    ]) ?>

</div>
