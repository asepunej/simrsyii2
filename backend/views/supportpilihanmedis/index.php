<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupportpilihanmedisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supportpilihanmedis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportpilihanmedis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supportpilihanmedis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pilihan_medis',
            'pilihan_medis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pilihan_medis' => $model->kd_pilihan_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
