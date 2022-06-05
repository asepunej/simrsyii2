<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supportprovinsi */

$this->title = $model->kdprovinsi;
$this->params['breadcrumbs'][] = ['label' => 'Supportprovinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supportprovinsi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kdprovinsi' => $model->kdprovinsi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kdprovinsi' => $model->kdprovinsi], [
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
            'kdprovinsi',
            'provinsi',
        ],
    ]) ?>

</div>
