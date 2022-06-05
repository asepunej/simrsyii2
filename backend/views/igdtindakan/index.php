<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IgdtindakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Igdtindakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="igdtindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Igdtindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tindakan',
            'id_registrasi',
            'icd9',
            'kd_icd9',
            'kd_tindakan',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tindakan' => $model->id_tindakan]);
                 }
            ],
        ],
    ]); ?>


</div>
