<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IgdanamnesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Igdanamnesas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igdanamnesa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Igdanamnesa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_anamnesa',
            'anamnesa',
            'bb',
            'tt',
            'index',
            //'kd_kesadaran',
            //'td_sistole',
            //'td_diatole',
            //'heart_rate',
            //'respirasi_rate',
            //'hasil_periksa',
            //'id_registrasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_anamnesa' => $model->id_anamnesa]);
                 }
            ],
        ],
    ]); ?>


</div>
