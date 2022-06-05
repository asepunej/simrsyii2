<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PendaftaranorderlabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaranorderlabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaranorderlab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendaftaranorderlab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_order',
            'no_order',
            'kd_pengirim',
            'nama_pengirim',
            'id_pekerjaan1',
            //'id_pekerjaan2',
            //'id_pekerjaan3',
            //'id_petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_order' => $model->id_order]);
                 }
            ],
        ],
    ]); ?>


</div>
