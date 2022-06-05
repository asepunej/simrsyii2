<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupportkabupatenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supportkabupatens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supportkabupaten-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supportkabupaten', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kdkabupaten',
            'kdprovinsi',
            'kabupaten',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kdkabupaten' => $model->kdkabupaten]);
                 }
            ],
        ],
    ]); ?>


</div>
