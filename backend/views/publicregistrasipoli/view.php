<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publicregistrasipoli */

$this->title = $model->id_registrasi_poli;
$this->params['breadcrumbs'][] = ['label' => 'Publicregistrasipolis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="publicregistrasipoli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_registrasi_poli' => $model->id_registrasi_poli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_registrasi_poli' => $model->id_registrasi_poli], [
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
            'id_registrasi_poli',
            'id_registrasi',
            'id_klinik',
            'no_antrian',
            'tgl',
            'id_user',
        ],
    ]) ?>

</div>
