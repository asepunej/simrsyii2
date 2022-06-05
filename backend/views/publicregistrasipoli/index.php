<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicregistrasipoliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publicregistrasipolis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicregistrasipoli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Publicregistrasipoli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_registrasi_poli',
            'id_registrasi',
            'id_klinik',
            'no_antrian',
            'tgl',
            //'id_user',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_registrasi_poli' => $model->id_registrasi_poli]);
                 }
            ],
        ],
    ]); ?>


</div>
