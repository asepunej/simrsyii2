<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupportstatuspasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supportstatuspasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportstatuspasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supportstatuspasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_status_pasien',
            'status_pasien',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_status_pasien' => $model->kd_status_pasien]);
                 }
            ],
        ],
    ]); ?>


</div>
