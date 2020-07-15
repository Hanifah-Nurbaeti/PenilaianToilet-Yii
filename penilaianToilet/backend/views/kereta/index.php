<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeretaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kereta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kereta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kereta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_kereta',
            'kereta_code',
            'kereta_name',
            'gerbong',
            'station.station_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
