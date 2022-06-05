<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupportklinikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supportkliniks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportklinik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supportklinik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_klinik',
            'klinik',
            'integrasi:boolean',
            'penunjang:boolean',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_klinik' => $model->kd_klinik]);
                 }
            ],
        ],
    ]); ?>


</div>
