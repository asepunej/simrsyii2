<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Igdanamnesa */

$this->title = $model->id_anamnesa;
$this->params['breadcrumbs'][] = ['label' => 'Igdanamnesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="igdanamnesa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_anamnesa' => $model->id_anamnesa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_anamnesa' => $model->id_anamnesa], [
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
            'id_anamnesa',
            'anamnesa',
            'bb',
            'tt',
            'index',
            'kd_kesadaran',
            'td_sistole',
            'td_diatole',
            'heart_rate',
            'respirasi_rate',
            'hasil_periksa',
            'id_registrasi',
        ],
    ]) ?>

</div>
