<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IgdkonsulSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Igdkonsuls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igdkonsul-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Igdkonsul', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_konsul',
            'id_register',
            'kd_klinik',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_konsul' => $model->id_konsul]);
                 }
            ],
        ],
    ]); ?>


</div>
